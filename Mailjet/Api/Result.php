<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerInterface;
use Progrupa\MailjetBundle\Mailjet\Model\ModelInterface;

class Result extends AbstractResult
{
    /**
     * @Type("integer")
     * @SerializedName("Count")
     */
    private $count;
    /**
     * @Type("integer")
     * @SerializedName("Total")
     */
    private $total;
    /**
     * @Type("array")
     * @SerializedName("Data")
     */
    private $data;
    /** @var  array */
    private $objects;

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    public function deserializeData(SerializerInterface $serializer, $getModel)
    {
        foreach ($this->data as $objectArray) {
            $obj = $serializer->deserialize($objectArray, $getModel, 'array');
            $this->objects[] = $obj;
        }
    }

    /**
     * @return ModelInterface
     */
    public function getObject()
    {
        if (! empty($this->objects)) {
            return reset($this->objects);
        }
        return null;
    }

    /**
     * @return array
     */
    public function getObjects()
    {
        return $this->objects;
    }

    public function hasObjects()
    {
        return $this->getCount() && count($this->objects);
    }

    /**
     * @param array $objects
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
    }
}
