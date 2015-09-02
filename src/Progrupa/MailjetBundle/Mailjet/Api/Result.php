<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 26/08/15
 * Time: 15:27
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerInterface;

class Result
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
    /** @var  boolean */
    private $success = false;
    /** @var  string */
    private $message;

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
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}
