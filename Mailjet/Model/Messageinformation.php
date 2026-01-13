<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Messageinformation Model
 *
 * API Key campaign/message information.
 */
class Messageinformation extends AbstractModel
{
    public static function getResource()
    {
        return 'messageinformation';
    }

    /**
     * reference to Campaign to which message belongs.
     * @SerializedName("CampaignID")
     */
    protected $CampaignID = null;

    /**
     * reference to Campaign to which message belongs.
     * @SerializedName("CampaignALT")
     */
    protected $CampaignALT = null;

    /**
     * Number of click track requests.
     * @SerializedName("ClickTrackedCount")
     */
    protected $ClickTrackedCount = null;

    /**
     * Reference to contact to which message was sent.
     * @SerializedName("ContactID")
     */
    protected $ContactID = null;

    /**
     * Reference to contact to which message was sent.
     * @SerializedName("ContactALT")
     */
    protected $ContactALT = null;

    /**
     * Size of the message.
     * @SerializedName("MessageSize")
     */
    protected $MessageSize = null;

    /**
     * Number of open track requests.
     * @SerializedName("OpenTrackedCount")
     */
    protected $OpenTrackedCount = null;

    /**
     * Number of messages waiting in send queue
     * @SerializedName("QueuedCount")
     */
    protected $QueuedCount = null;

    /**
     * Timestamp indicating when last message was sent for the campaign.
     * @SerializedName("SendEndAt")
     */
    protected $SendEndAt = null;

    /**
     * Number of actual sent attempts.
     * @SerializedName("SentCount")
     */
    protected $SentCount = null;

    /**
     * Matched spam assassin rules.
     * @SerializedName("SpamAssassinRules")
     */
    protected $SpamAssassinRules = null;

    /**
     * Spam assassin score for this message.
     * @SerializedName("SpamAssassinScore")
     */
    protected $SpamAssassinScore = null;

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
    public function getClickTrackedCount()
    {
        return $this->ClickTrackedCount;
    }

    /**
     * @param mixed $ClickTrackedCount
     */
    public function setClickTrackedCount($ClickTrackedCount)
    {
        $this->ClickTrackedCount = $ClickTrackedCount;
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
    public function getMessageSize()
    {
        return $this->MessageSize;
    }

    /**
     * @param mixed $MessageSize
     */
    public function setMessageSize($MessageSize)
    {
        $this->MessageSize = $MessageSize;
    }

    /**
     * @return mixed
     */
    public function getOpenTrackedCount()
    {
        return $this->OpenTrackedCount;
    }

    /**
     * @param mixed $OpenTrackedCount
     */
    public function setOpenTrackedCount($OpenTrackedCount)
    {
        $this->OpenTrackedCount = $OpenTrackedCount;
    }

    /**
     * @return mixed
     */
    public function getQueuedCount()
    {
        return $this->QueuedCount;
    }

    /**
     * @param mixed $QueuedCount
     */
    public function setQueuedCount($QueuedCount)
    {
        $this->QueuedCount = $QueuedCount;
    }

    /**
     * @return mixed
     */
    public function getSendEndAt()
    {
        return $this->SendEndAt;
    }

    /**
     * @param mixed $SendEndAt
     */
    public function setSendEndAt($SendEndAt)
    {
        $this->SendEndAt = $SendEndAt;
    }

    /**
     * @return mixed
     */
    public function getSentCount()
    {
        return $this->SentCount;
    }

    /**
     * @param mixed $SentCount
     */
    public function setSentCount($SentCount)
    {
        $this->SentCount = $SentCount;
    }

    /**
     * @return mixed
     */
    public function getSpamAssassinRules()
    {
        return $this->SpamAssassinRules;
    }

    /**
     * @param mixed $SpamAssassinRules
     */
    public function setSpamAssassinRules($SpamAssassinRules)
    {
        $this->SpamAssassinRules = $SpamAssassinRules;
    }

    /**
     * @return mixed
     */
    public function getSpamAssassinScore()
    {
        return $this->SpamAssassinScore;
    }

    /**
     * @param mixed $SpamAssassinScore
     */
    public function setSpamAssassinScore($SpamAssassinScore)
    {
        $this->SpamAssassinScore = $SpamAssassinScore;
    }
}
