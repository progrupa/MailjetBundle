<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


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
            $api = new GeneralApi($this->client, $this->serializer);
            $api->setModel($modelClass);

            $this->apis[$modelClass] = $api;
        }

        return $this->apis[$modelClass];
    }
}
