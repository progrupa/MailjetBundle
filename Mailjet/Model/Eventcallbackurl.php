<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Eventcallbackurl Model
 *
 * URLs for event mechanisms (triggers) of Mailjet
 */
class Eventcallbackurl implements ModelInterface
{
    public static function getResource()
    {
        return 'eventcallbackurl';
    }

    /**
     * API Key for which the callback URL is registered.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $APIKeyID = null;

    /**
     * API Key for which the callback URL is registered.
     * @Type("string")
     * @SerializedName("APIKeyALT")
     */
    protected $APIKeyALT = null;

    /**
     * Numerical event type.
     * @Type("string")
     * @SerializedName("EventType")
     */
    protected $EventType = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Is this a backup URL ?
     * @Type("boolean")
     * @SerializedName("IsBackup")
     */
    protected $IsBackup = false;

    /**
     * Status of the event
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * Timestamp indicating when this object was last modified.
     * @Type("string")
     * @SerializedName("UpdatedAt")
     */
    protected $UpdatedAt = null;

    /**
     * URL to use
     * @Type("string")
     * @SerializedName("Url")
     */
    protected $Url = null;

    /**
     * Event API version for which this URL is valid.
     * @Type("integer")
     * @SerializedName("Version")
     */
    protected $Version = null;

    /**
     * @return mixed
     */
    public function getAPIKeyID()
    {
        return $this->APIKeyID;
    }

    /**
     * @param mixed $APIKeyID
     */
    public function setAPIKeyID($APIKeyID)
    {
        $this->APIKeyID = $APIKeyID;
    }

    /**
     * @return mixed
     */
    public function getAPIKeyALT()
    {
        return $this->APIKeyALT;
    }

    /**
     * @param mixed $APIKeyALT
     */
    public function setAPIKeyALT($APIKeyALT)
    {
        $this->APIKeyALT = $APIKeyALT;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->EventType;
    }

    /**
     * @param mixed $EventType
     */
    public function setEventType($EventType)
    {
        $this->EventType = $EventType;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getIsBackup()
    {
        return $this->IsBackup;
    }

    /**
     * @param mixed $IsBackup
     */
    public function setIsBackup($IsBackup)
    {
        $this->IsBackup = $IsBackup;
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

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }

    /**
     * @param mixed $UpdatedAt
     */
    public function setUpdatedAt($UpdatedAt)
    {
        $this->UpdatedAt = $UpdatedAt;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param mixed $Url
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param mixed $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
    }
}
