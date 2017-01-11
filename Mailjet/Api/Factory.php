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
    /** @var bool */
    private $repeat = false;

    public function __construct(ClientInterface $client, SerializerInterface $serializer)
    {
        $this->client = $client;
        $this->serializer = $serializer;
    }

    /**
     * @return boolean
     */
    public function isRepeat()
    {
        return $this->repeat;
    }

    /**
     * @param boolean $repeat
     */
    public function setRepeat($repeat)
    {
        $this->repeat = $repeat;
    }

    public function create($modelClass)
    {
        if (! isset($this->apis[$modelClass])) {
            $apiClass = $this->getApiClass($modelClass);
            $api = new $apiClass($this->client, $this->serializer);
            $api->setModel($modelClass);
            $api->setRepeat($this->repeat);

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
