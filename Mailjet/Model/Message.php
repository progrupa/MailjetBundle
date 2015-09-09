<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Message Model
 *
 * API Key messages processed by Mailjet. One record per processed email.
 */
class Message implements ModelInterface
{
    public static function getResource()
    {
        return 'message';
    }

    /**
     * Timestamp indicated when the message arrived at Mailjet
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("APIKeyID")
     */
    protected $ArrivedAt = null;

    /**
     * Number of attachments detected in the message.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $AttachmentCount = null;

    /**
     * Number of attempts made to deliver the message.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $AttemptCount = null;

    /**
     * Reference to campaign in which this message is delivered.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $CampaignID = null;

    /**
     * Reference to campaign in which this message is delivered.
     * @Type("string")
     * @SerializedName("APIKeyID")
     */
    protected $CampaignALT = null;

    /**
     * Reference to contact to which message was sent.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $ContactID = null;

    /**
     * Reference to contact to which message was sent.
     * @Type("string")
     * @SerializedName("APIKeyID")
     */
    protected $ContactALT = null;

    /**
     * Delay between arrival and delivery [?]
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $Delay = null;

    /**
     * Reference to destination domain
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $Destination = null;

    /**
     * Time spent processing the text of the message (milliseconds)
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $FilterTime = null;

    /**
     * Reference to the sender of the message.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $FromID = null;

    /**
     * Reference to the sender of the message.
     * @Type("string")
     * @SerializedName("APIKeyID")
     */
    protected $FromALT = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $ID = null;

    /**
     * Was click tracking requested for this message ?
     * @Type("boolean")
     * @SerializedName("APIKeyID")
     */
    protected $IsClickTracked = false;

    /**
     * Did the message contain a HTML part ?
     * @Type("boolean")
     * @SerializedName("APIKeyID")
     */
    protected $IsHTMLPartIncluded = false;

    /**
     * Was open tracking requested for this message ?
     * @Type("boolean")
     * @SerializedName("APIKeyID")
     */
    protected $IsOpenTracked = false;

    /**
     * Did the message contain a text part ?
     * @Type("boolean")
     * @SerializedName("APIKeyID")
     */
    protected $IsTextPartIncluded = false;

    /**
     * Was unsubscription tracking requested for this message ?
     * @Type("boolean")
     * @SerializedName("APIKeyID")
     */
    protected $IsUnsubTracked = false;

    /**
     * Size of the message (in bytes)
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $MessageSize = null;

    /**
     * Spam assassin score for this message.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $SpamassassinScore = null;

    /**
     * Matched spam assassin rules.
     * @Type("string")
     * @SerializedName("APIKeyID")
     */
    protected $SpamassRules = null;

    /**
     * Current state of the message.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $StateID = null;

    /**
     * Is the state of the message permanent (i.e. will no longer change)
     * @Type("boolean")
     * @SerializedName("APIKeyID")
     */
    protected $StatePermanent = false;

    /**
     * Status of the message.
     * @Type("string")
     * @SerializedName("APIKeyID")
     */
    protected $Status = null;

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
    public function getAttachmentCount()
    {
        return $this->AttachmentCount;
    }

    /**
     * @param mixed $AttachmentCount
     */
    public function setAttachmentCount($AttachmentCount)
    {
        $this->AttachmentCount = $AttachmentCount;
    }

    /**
     * @return mixed
     */
    public function getAttemptCount()
    {
        return $this->AttemptCount;
    }

    /**
     * @param mixed $AttemptCount
     */
    public function setAttemptCount($AttemptCount)
    {
        $this->AttemptCount = $AttemptCount;
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
    public function getDelay()
    {
        return $this->Delay;
    }

    /**
     * @param mixed $Delay
     */
    public function setDelay($Delay)
    {
        $this->Delay = $Delay;
    }

    /**
     * @return mixed
     */
    public function getDestination()
    {
        return $this->Destination;
    }

    /**
     * @param mixed $Destination
     */
    public function setDestination($Destination)
    {
        $this->Destination = $Destination;
    }

    /**
     * @return mixed
     */
    public function getFilterTime()
    {
        return $this->FilterTime;
    }

    /**
     * @param mixed $FilterTime
     */
    public function setFilterTime($FilterTime)
    {
        $this->FilterTime = $FilterTime;
    }

    /**
     * @return mixed
     */
    public function getFromID()
    {
        return $this->FromID;
    }

    /**
     * @param mixed $FromID
     */
    public function setFromID($FromID)
    {
        $this->FromID = $FromID;
    }

    /**
     * @return mixed
     */
    public function getFromALT()
    {
        return $this->FromALT;
    }

    /**
     * @param mixed $FromALT
     */
    public function setFromALT($FromALT)
    {
        $this->FromALT = $FromALT;
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
    public function getIsClickTracked()
    {
        return $this->IsClickTracked;
    }

    /**
     * @param mixed $IsClickTracked
     */
    public function setIsClickTracked($IsClickTracked)
    {
        $this->IsClickTracked = $IsClickTracked;
    }

    /**
     * @return mixed
     */
    public function getIsHTMLPartIncluded()
    {
        return $this->IsHTMLPartIncluded;
    }

    /**
     * @param mixed $IsHTMLPartIncluded
     */
    public function setIsHTMLPartIncluded($IsHTMLPartIncluded)
    {
        $this->IsHTMLPartIncluded = $IsHTMLPartIncluded;
    }

    /**
     * @return mixed
     */
    public function getIsOpenTracked()
    {
        return $this->IsOpenTracked;
    }

    /**
     * @param mixed $IsOpenTracked
     */
    public function setIsOpenTracked($IsOpenTracked)
    {
        $this->IsOpenTracked = $IsOpenTracked;
    }

    /**
     * @return mixed
     */
    public function getIsTextPartIncluded()
    {
        return $this->IsTextPartIncluded;
    }

    /**
     * @param mixed $IsTextPartIncluded
     */
    public function setIsTextPartIncluded($IsTextPartIncluded)
    {
        $this->IsTextPartIncluded = $IsTextPartIncluded;
    }

    /**
     * @return mixed
     */
    public function getIsUnsubTracked()
    {
        return $this->IsUnsubTracked;
    }

    /**
     * @param mixed $IsUnsubTracked
     */
    public function setIsUnsubTracked($IsUnsubTracked)
    {
        $this->IsUnsubTracked = $IsUnsubTracked;
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
    public function getSpamassassinScore()
    {
        return $this->SpamassassinScore;
    }

    /**
     * @param mixed $SpamassassinScore
     */
    public function setSpamassassinScore($SpamassassinScore)
    {
        $this->SpamassassinScore = $SpamassassinScore;
    }

    /**
     * @return mixed
     */
    public function getSpamassRules()
    {
        return $this->SpamassRules;
    }

    /**
     * @param mixed $SpamassRules
     */
    public function setSpamassRules($SpamassRules)
    {
        $this->SpamassRules = $SpamassRules;
    }

    /**
     * @return mixed
     */
    public function getStateID()
    {
        return $this->StateID;
    }

    /**
     * @param mixed $StateID
     */
    public function setStateID($StateID)
    {
        $this->StateID = $StateID;
    }

    /**
     * @return mixed
     */
    public function getStatePermanent()
    {
        return $this->StatePermanent;
    }

    /**
     * @param mixed $StatePermanent
     */
    public function setStatePermanent($StatePermanent)
    {
        $this->StatePermanent = $StatePermanent;
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
