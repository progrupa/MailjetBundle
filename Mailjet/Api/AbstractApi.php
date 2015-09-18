<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 26/08/15
 * Time: 11:48
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use JMS\Serializer\SerializerInterface;
use Progrupa\MailjetBundle\Mailjet\Model\ModelInterface;

abstract class AbstractApi
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

    public function get($id)
    {
        return $this->call(
            'GET',
            $this->getResourceForId($id)
        );
    }

    public function getList()
    {
        return $this->call(
            'GET',
            $this->getResource()
        );
    }

    public function update(ModelInterface $model)
    {
        return $model->getID() ? $this->_update($model) : $this->_create($model);
    }

    public function delete($id)
    {
        return $this->call(
            'DELETE',
            $this->getResourceForId($id)
        );
    }

    protected function _create(ModelInterface $model)
    {
        return $this->call(
            'POST',
            $this->getResource(),
            $this->serializer->serialize($model, 'json'),
            [201]
        );
    }

    protected function _update(ModelInterface $model)
    {
        return $this->call(
            'PUT',
            $this->getResourceForId($model->getID()),
            $this->serializer->serialize($model, 'json'),
            [200, 304]
        );
    }

    /**
     * @return string Resource name on the endpoint
     */
    abstract protected function getResource();

    /**
     * @return string Classname of the api model
     */
    abstract protected function getModel();

    /**
     * @param $id
     * @return Result
     */
    private function call($method, $resource, $body = null, $acceptedCodes = array(200))
    {
        try {
            $response = $this->client->request(
                $method,
                $resource,
                array(
                    'body' => $body
                )
            );

            if ($response->getBody()) {
                /** @var Result $result */
                $result = $this->serializer->deserialize((string)$response->getBody(), Result::class, 'json');
                $result->deserializeData($this->serializer, $this->getModel());
            } else {
                $result = new Result();
            }

            $result->setSuccess(in_array($response->getStatusCode(), $acceptedCodes))->setMessage($response->getReasonPhrase());

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

    private function getResourceForId($id)
    {
        return $this->getResource() . "/$id";
    }
}
