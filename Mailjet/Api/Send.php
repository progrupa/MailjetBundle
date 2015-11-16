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
use Progrupa\MailjetBundle\Mailjet\Model\Recipient;
use Progrupa\MailjetBundle\Mailjet\Model\SendEmail;
use Psr\Http\Message\RequestInterface;

class Send extends AbstractApi
{
    /** @var bool|string */
    private $debugRecipient;

    public function __construct(ClientInterface $client, SerializerInterface $serializer, $debugRecipient = false)
    {
        parent::__construct($client, $serializer);
        $this->debugRecipient = $debugRecipient;
    }

    public function send(SendEmail $email)
    {
        if ($this->debugRecipient) {
            $recipientInfo = $this->prepareRecipientInfo($email);
            if ($email->getHtml()) {
                $email->setHtml($email->getHtml() . $recipientInfo);
            } else {
                $email->setText($email->getText() . $recipientInfo);
            }

            $email->setRecipients([new Recipient($this->debugRecipient)]);
            $email->setTo(null);
            $email->setCc(null);
            $email->setBcc(null);
        }

        return $this->call('POST', $this->getResource(), $this->serializer->serialize($email, 'json'), [200]);
    }

    /**
     * @return string Classname of the api model
     */
    protected function getModel()
    {
        return SendEmail::class;
    }

    protected function getResource()
    {
        return 'send';
    }

    protected function getResultClass()
    {
        return SendResult::class;
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

    private function prepareRecipientInfo(SendEmail $email)
    {
        $out = "Message intended for:\n";
        if ($email->getRecipients()) {
            $out .= "Recipients: ".implode(', ', $email->getRecipients())."\n";
        }
        if ($email->getTo()) $out .= "To: ".implode(', ', $email->getTo())."\n";
        if ($email->getCc()) $out .= "To: ".implode(', ', $email->getCc())."\n";
        if ($email->getBcc()) $out .= "To: ".implode(', ', $email->getBcc())."\n";

        return $out;
    }
}
