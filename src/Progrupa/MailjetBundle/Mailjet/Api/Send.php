<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 01/09/15
 * Time: 13:03
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerInterface;
use Progrupa\MailjetBundle\Mailjet\Model\SendEmail;
use Psr\Http\Message\RequestInterface;

class Send
{
    /** @var  ClientInterface */
    private $client;
    /** @var  SerializerInterface */
    private $serializer;

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function send(SendEmail $email)
    {
        $data = $this->serializer->serialize($email, 'array');

        $data = $this->transformToMultipart($data);

        /** @var HandlerStack $stack */
        $stack = $this->client->getConfig('handler');
        $stack->after('prepare_body',
            Middleware::mapRequest(function (RequestInterface $r) {
                return $r->withBody(\GuzzleHttp\Psr7\stream_for(preg_replace('/%5B[0-9]+%5D/simU', '', $r->getBody())));
            }, 'remove_brackets')
        );

        try {
            /** @var Response $response */
            $response = $this->client->post(
                $this->getResource(),
                array(
                    'multipart' => $data
                )
            );

            $result = new Result();
            $result->setSuccess(in_array($response->getStatusCode(), [200]))->setMessage($response->getReasonPhrase());

            return $result;
        } catch (GuzzleException $ge) {
            $result = new Result();
            $result->setSuccess(false)->setMessage($ge->getMessage());
            return $result;
        } catch (\Exception $e) {
            $result = new Result();
            $result->setSuccess(false)->setMessage($e->getMessage());
            return $result;
        }
    }

    protected function getResource()
    {
        return 'send/message';
    }

    private function transformToMultipart($data)
    {
        $correctedData = array();
        foreach ($data as $k => $v) {
            $correctedData[str_replace('_', '-', $k)] = $v;
        }

        $multipart = array();

        if (isset($correctedData['attachment'])) {
            foreach ($correctedData['attachment'] as $name => $path) {
                if (file_exists($path)) {
                    $multipart[] = array(
                        'name' => 'attachment',
                        'contents' => file_get_contents($path),
                        'filename' => is_integer($name) ? pathinfo($path, PATHINFO_BASENAME) : $name,
                    );
                }
            }

            unset ($correctedData['attachment']);
        }

        if (isset($correctedData['inlineAttachment'])) {
            foreach ($correctedData['inlineAttachment'] as $name => $path) {
                if (file_exists($path)) {
                    $multipart[] = array(
                        'name' => 'inlineAttachment',
                        'contents' => file_get_contents($path),
                        'filename' => is_integer($name) ? pathinfo($path, PATHINFO_BASENAME) : $name,
                    );
                }
            }

            unset ($correctedData['inlineAttachment']);
        }

        foreach ($correctedData as $field => $value) {
            if (is_array($value)) {
                foreach ($value as $v) {
                    $multipart[] = array(
                        'name' => $field,
                        'contents' => (string) $v,
                    );
                }

            } else {
                $multipart[] = array(
                    'name' => $field,
                    'contents' => (string) $value,
                );
            }
        }

        return $multipart;
    }
}
