<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Messagehistory Model
 *
 * Event history of a message
 */
class Messagehistory implements ModelInterface
{
    public static function getResource()
    {
        return 'messagehistory';
    }

    /**
     * More details for the message
     * @SerializedName("Comment")
     */
    protected $Comment = null;

    /**
     * Timestamp when event was registered.
     * @SerializedName("EventAt")
     */
    protected $EventAt = null;

    /**
     * Type of event
     * Allowed values:
     * - sent
     * - opened
     * - clicked
     * - bounced
     * - blocked
     * - unsub
     * @SerializedName("EventType")
     */
    protected $EventType = 'sent';

    /**
     * The state of the message
     * @SerializedName("State")
     */
    protected $State = null;

    /**
     * Useragent used to trigger the event (when applicable)
     * @SerializedName("Useragent")
     */
    protected $Useragent = null;

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param mixed $Comment
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
    }

    /**
     * @return mixed
     */
    public function getEventAt()
    {
        return $this->EventAt;
    }

    /**
     * @param mixed $EventAt
     */
    public function setEventAt($EventAt)
    {
        $this->EventAt = $EventAt;
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
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     */
    public function setState($State)
    {
        $this->State = $State;
    }

    /**
     * @return mixed
     */
    public function getUseragent()
    {
        return $this->Useragent;
    }

    /**
     * @param mixed $Useragent
     */
    public function setUseragent($Useragent)
    {
        $this->Useragent = $Useragent;
    }
}
