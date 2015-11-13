<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SendResultElement {
    /**
     * @Type("string")
     * @SerializedName("Email")
     */
    private $email;
    /**
     * @Type("integer")
     * @SerializedName("MessageID")
     */
    private $messageId;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @param mixed $messageId
     */
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;
    }
}
