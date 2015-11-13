<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


abstract class AbstractResult
{
    /** @var  boolean */
    protected $success = false;
    /** @var  string */
    protected $message;

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
