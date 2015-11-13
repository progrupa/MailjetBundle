<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerInterface;

class SendResult extends AbstractResult
{
    /**
     * @Type("array<Progrupa\MailjetBundle\Mailjet\Api\SendResultElement>")
     * @SerializedName("Sent")
     */
    private $sent;

    /**
     * @return mixed
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param mixed $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    public function deserializeData(SerializerInterface $serializer, $getModel) {}
}
