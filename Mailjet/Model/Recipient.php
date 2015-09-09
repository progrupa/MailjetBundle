<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Newsletter recipient
 */
class Recipient
{
    /**
     * Recipient email address
     * @Type("string")
     * @SerializedName("Email")
     */
    protected $Email = null;
    /**
     * Recipient name
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }
}
