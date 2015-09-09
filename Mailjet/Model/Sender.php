<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Sender Model
 *
 * API Key sender email address
 */
class Sender extends AbstractModel
{
    public static function getResource()
    {
        return 'sender';
    }

    /**
     * Key used when confirming validity of this sender.
     * @Type("string")
     * @SerializedName("ConfirmKey")
     */
    protected $ConfirmKey = null;

    /**
     * DNS domain to which sender belongs.
     * @Type("string")
     * @SerializedName("DNS")
     */
    protected $DNS = null;

    /**
     * Email Address of this sender
     * @Type("string")
     * @SerializedName("Email")
     */
    protected $Email = null;

    /**
     * Type of emails that can be sent from this address
     * @Type("string")
     * @SerializedName("EmailType")
     */
    protected $EmailType = null;

    /**
     * Filename expected on the domain name webserver, used for verifying the domain in
     * case of a catch-all address.
     * @Type("string")
     * @SerializedName("Filename")
     */
    protected $Filename = null;

    /**
     * Is this the default sender for this API key ?
     * @Type("boolean")
     * @SerializedName("ACL")
     */
    protected $IsDefaultSender = false;

    /**
     * User-provided name for this sender
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Status of the sender
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = 'Inactive';

    /**
     * @return mixed
     */
    public function getConfirmKey()
    {
        return $this->ConfirmKey;
    }

    /**
     * @param mixed $ConfirmKey
     */
    public function setConfirmKey($ConfirmKey)
    {
        $this->ConfirmKey = $ConfirmKey;
    }

    /**
     * @return mixed
     */
    public function getDNS()
    {
        return $this->DNS;
    }

    /**
     * @param mixed $DNS
     */
    public function setDNS($DNS)
    {
        $this->DNS = $DNS;
    }

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
    public function getEmailType()
    {
        return $this->EmailType;
    }

    /**
     * @param mixed $EmailType
     */
    public function setEmailType($EmailType)
    {
        $this->EmailType = $EmailType;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->Filename;
    }

    /**
     * @param mixed $Filename
     */
    public function setFilename($Filename)
    {
        $this->Filename = $Filename;
    }

    /**
     * @return mixed
     */
    public function getIsDefaultSender()
    {
        return $this->IsDefaultSender;
    }

    /**
     * @param mixed $IsDefaultSender
     */
    public function setIsDefaultSender($IsDefaultSender)
    {
        $this->IsDefaultSender = $IsDefaultSender;
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

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }
}
