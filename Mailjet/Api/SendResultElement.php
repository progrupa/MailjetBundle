<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


use Symfony\Component\Serializer\Annotation\SerializedName;

class SendResultElement {
    /**
     * @SerializedName("Email")
     */
    private $email;
    /**
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
