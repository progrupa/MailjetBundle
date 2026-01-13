<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\SerializerInterface;

class SendResult extends AbstractResult
{
    /**
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
