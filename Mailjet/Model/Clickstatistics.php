<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Clickstatistics Model
 *
 * Click statistics for messages
 */
class Clickstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'clickstatistics';
    }

    /**
     * Timestamp of registration of click.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("ClickedAt")
     */
    protected $ClickedAt = null;

    /**
     * Delay between registration of click and sending of message.
     * @Type("integer")
     * @SerializedName("ClickedDelay")
     */
    protected $ClickedDelay = null;

    /**
     * Contact for which click was registered.
     * @Type("integer")
     * @SerializedName("ContactID")
     */
    protected $ContactID = null;

    /**
     * Contact for which click was registered.
     * @Type("string")
     * @SerializedName("ContactALT")
     */
    protected $ContactALT = null;

    /**
     * Unique numerical ID for the click event
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Reference to Message for which click was registered.
     * @Type("integer")
     * @SerializedName("MessageID")
     */
    protected $MessageID = null;

    /**
     * URL that was clicked
     * @Type("string")
     * @SerializedName("Url")
     */
    protected $Url = null;

    /**
     * User agent that was used to open the URL.
     * @Type("string")
     * @SerializedName("UserAgent")
     */
    protected $UserAgent = null;

    /**
     * @return mixed
     */
    public function getClickedAt()
    {
        return $this->ClickedAt;
    }

    /**
     * @param mixed $ClickedAt
     */
    public function setClickedAt($ClickedAt)
    {
        $this->ClickedAt = $ClickedAt;
    }

    /**
     * @return mixed
     */
    public function getClickedDelay()
    {
        return $this->ClickedDelay;
    }

    /**
     * @param mixed $ClickedDelay
     */
    public function setClickedDelay($ClickedDelay)
    {
        $this->ClickedDelay = $ClickedDelay;
    }

    /**
     * @return mixed
     */
    public function getContactID()
    {
        return $this->ContactID;
    }

    /**
     * @param mixed $ContactID
     */
    public function setContactID($ContactID)
    {
        $this->ContactID = $ContactID;
    }

    /**
     * @return mixed
     */
    public function getContactALT()
    {
        return $this->ContactALT;
    }

    /**
     * @param mixed $ContactALT
     */
    public function setContactALT($ContactALT)
    {
        $this->ContactALT = $ContactALT;
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
    public function getMessageID()
    {
        return $this->MessageID;
    }

    /**
     * @param mixed $MessageID
     */
    public function setMessageID($MessageID)
    {
        $this->MessageID = $MessageID;
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
    public function getUserAgent()
    {
        return $this->UserAgent;
    }

    /**
     * @param mixed $UserAgent
     */
    public function setUserAgent($UserAgent)
    {
        $this->UserAgent = $UserAgent;
    }
}
