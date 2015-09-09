<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trigger Model
 *
 * Triggers for outgoing events
 */
class Trigger implements ModelInterface
{
    public static function getResource()
    {
        return 'trigger';
    }

    /**
     * Timestamp when object was written to the database
     * @Type("integer")
     * @SerializedName("AddedTs")
     */
    protected $AddedTs = null;

    /**
     * Reference to API key to whom this trigger belongs.
     * @Type("integer")
     * @SerializedName("APIKey")
     */
    protected $APIKey = null;

    /**
     * JSON with event details
     * @Type("string")
     * @SerializedName("Details")
     */
    protected $Details = null;

    /**
     * Type of event
     * @Type("string")
     * @SerializedName("Event")
     */
    protected $Event = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Reference to user to whom this trigger belongs.
     * @Type("integer")
     * @SerializedName("User")
     */
    protected $User = null;

    /**
     * @return mixed
     */
    public function getAddedTs()
    {
        return $this->AddedTs;
    }

    /**
     * @param mixed $AddedTs
     */
    public function setAddedTs($AddedTs)
    {
        $this->AddedTs = $AddedTs;
    }

    /**
     * @return mixed
     */
    public function getAPIKey()
    {
        return $this->APIKey;
    }

    /**
     * @param mixed $APIKey
     */
    public function setAPIKey($APIKey)
    {
        $this->APIKey = $APIKey;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * @param mixed $Details
     */
    public function setDetails($Details)
    {
        $this->Details = $Details;
    }

    /**
     * @return mixed
     */
    public function getEvent()
    {
        return $this->Event;
    }

    /**
     * @param mixed $Event
     */
    public function setEvent($Event)
    {
        $this->Event = $Event;
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
    public function getUser()
    {
        return $this->User;
    }

    /**
     * @param mixed $User
     */
    public function setUser($User)
    {
        $this->User = $User;
    }
}
