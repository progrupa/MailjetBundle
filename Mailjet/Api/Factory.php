<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;

use GuzzleHttp\ClientInterface;
use JMS\Serializer\SerializerInterface;
use Progrupa\MailjetBundle\Mailjet\Model\ChildModelInterface;

class Factory
{
    /** @var  ClientInterface */
    private $client;
    /** @var  SerializerInterface */
    private $serializer;
    /** @var  AbstractApi[] */
    private $apis;

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    public function create($modelClass)
    {
        if (! isset($this->apis[$modelClass])) {
            $apiClass = $this->getApiClass($modelClass);
            $api = new $apiClass($this->client, $this->serializer);
            $api->setModel($modelClass);

            $this->apis[$modelClass] = $api;
        }

        return $this->apis[$modelClass];
    }

    /**
     * @return mixed
     */
    protected function getApiClass($modelClass)
    {
        $interfaces = class_implements($modelClass);

        if (false !== array_search(ChildModelInterface::class, $interfaces)) {
            $apiClass = ChildModelApi::class;
        } else {
            $apiClass = GeneralApi::class;
        }

        return $apiClass;
    }
}
