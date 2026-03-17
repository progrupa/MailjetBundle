<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Openinformation Model
 *
 * API Key message open information
 */
class Openinformation implements ModelInterface
{
    public static function getResource()
    {
        return 'openinformation';
    }

    /**
     * Timestamp indicating when the message arrived.
     */
    #[SerializedName('ArrivedAt')]
    protected $ArrivedAt = null;

    /**
     * Reference to Campaign in which message is sent
     */
    #[SerializedName('CampaignID')]
    protected $CampaignID = null;

    /**
     * Reference to Campaign in which message is sent
     */
    #[SerializedName('CampaignALT')]
    protected $CampaignALT = null;

    /**
     * Reference to contact to which message was sent.
     */
    #[SerializedName('ContactID')]
    protected $ContactID = null;

    /**
     * Reference to contact to which message was sent.
     */
    #[SerializedName('ContactALT')]
    protected $ContactALT = null;

    /**
     * Unique numerical ID for this object
     */
    #[SerializedName('ID')]
    protected $ID = null;

    /**
     * Unique numerical ID for this object
     */
    #[SerializedName('MessageID')]
    protected $MessageID = null;

    /**
     * Timestamp when message open registration was received.
     */
    #[SerializedName('OpenedAt')]
    protected $OpenedAt = null;

    /**
     * Useragent used to view the message.
     */
    #[SerializedName('UserAgent')]
    protected $UserAgent = null;

    /**
     * Useragent used to view the message.
     */
    #[SerializedName('UserAgentFull')]
    protected $UserAgentFull = null;

    /**
     * @return mixed
     */
    public function getArrivedAt()
    {
        return $this->ArrivedAt;
    }

    /**
     * @param mixed $ArrivedAt
     */
    public function setArrivedAt($ArrivedAt)
    {
        $this->ArrivedAt = $ArrivedAt;
    }

    /**
     * @return mixed
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param mixed $CampaignID
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;
    }

    /**
     * @return mixed
     */
    public function getCampaignALT()
    {
        return $this->CampaignALT;
    }

    /**
     * @param mixed $CampaignALT
     */
    public function setCampaignALT($CampaignALT)
    {
        $this->CampaignALT = $CampaignALT;
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
    public function getOpenedAt()
    {
        return $this->OpenedAt;
    }

    /**
     * @param mixed $OpenedAt
     */
    public function setOpenedAt($OpenedAt)
    {
        $this->OpenedAt = $OpenedAt;
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

    /**
     * @return mixed
     */
    public function getUserAgentFull()
    {
        return $this->UserAgentFull;
    }

    /**
     * @param mixed $UserAgentFull
     */
    public function setUserAgentFull($UserAgentFull)
    {
        $this->UserAgentFull = $UserAgentFull;
    }
}
