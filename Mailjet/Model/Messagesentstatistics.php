<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Messagesentstatistics Model
 *
 * API Key Statistical campaign/message data.
 */
class Messagesentstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'messagesentstatistics';
    }

    /**
     * When did the message arrive at Mailjet
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("ArrivalTs")
     */
    protected $ArrivalTs = null;

    /**
     * Was the message blocked ?
     * @Type("boolean")
     * @SerializedName("Blocked")
     */
    protected $Blocked = false;

    /**
     * Has the message bounced ?
     * @Type("boolean")
     * @SerializedName("Bounce")
     */
    protected $Bounce = false;

    /**
     * Timestamp when the message had bounced. Available if ShowExtraData=True
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("BounceDate")
     */
    protected $BounceDate = null;

    /**
     * The reaon why the message bounced. Available if ShowExtraData=True
     * @Type("string")
     * @SerializedName("BounceReason")
     */
    protected $BounceReason = null;

    /**
     * reference to the Campaign to which message belongs.
     * @Type("integer")
     * @SerializedName("CampaignID")
     */
    protected $CampaignID = null;

    /**
     * reference to the Campaign to which message belongs.
     * @Type("string")
     * @SerializedName("CampaignALT")
     */
    protected $CampaignALT = null;

    /**
     * Was a click registered for this message ?
     * @Type("boolean")
     * @SerializedName("Click")
     */
    protected $Click = false;

    /**
     * Number of recipients for this campaign.
     * @Type("integer")
     * @SerializedName("CntRecipients")
     */
    protected $CntRecipients = null;

    /**
     * Timestamp for the date of the complaint. Available if ShowExtraData=True
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("ComplaintDate")
     */
    protected $ComplaintDate = null;

    /**
     * Reference to contact to which message was sent.
     * @Type("integer")
     * @SerializedName("ContactID")
     */
    protected $ContactID = null;

    /**
     * Reference to contact to which message was sent.
     * @Type("string")
     * @SerializedName("ContactALT")
     */
    protected $ContactALT = null;

    /**
     * More details for the message
     * @Type("string")
     * @SerializedName("Details")
     */
    protected $Details = null;

    /**
     * FBLSource. Available if ShowExtraData=True
     * @Type("string")
     * @SerializedName("FBLSource")
     */
    protected $FBLSource = null;

    /**
     * FBLSource. Available if ShowExtraData=True
     * @Type("integer")
     * @SerializedName("MessageID")
     */
    protected $MessageID = null;

    /**
     * Was the message opened ?
     * @Type("boolean")
     * @SerializedName("Open")
     */
    protected $Open = false;

    /**
     * Is the message still in the queue ?
     * @Type("boolean")
     * @SerializedName("Queued")
     */
    protected $Queued = false;

    /**
     * Was the message sent ?
     * @Type("boolean")
     * @SerializedName("Sent")
     */
    protected $Sent = false;

    /**
     * Was a spam complaint registered for this message ?
     * @Type("boolean")
     * @SerializedName("Spam")
     */
    protected $Spam = false;

    /**
     * Current state of the message.
     * @Type("integer")
     * @SerializedName("StateID")
     */
    protected $StateID = null;

    /**
     * Is the current state of the message permanent ?
     * @Type("boolean")
     * @SerializedName("StatePermanent")
     */
    protected $StatePermanent = false;

    /**
     * Current status of the message.
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * The receiver email for the message
     * @Type("string")
     * @SerializedName("ToEmail")
     */
    protected $ToEmail = null;

    /**
     * Was the message unsubed ?
     * @Type("boolean")
     * @SerializedName("Unsub")
     */
    protected $Unsub = null;

    /**
     * @return mixed
     */
    public function getArrivalTs()
    {
        return $this->ArrivalTs;
    }

    /**
     * @param mixed $ArrivalTs
     */
    public function setArrivalTs($ArrivalTs)
    {
        $this->ArrivalTs = $ArrivalTs;
    }

    /**
     * @return mixed
     */
    public function getBlocked()
    {
        return $this->Blocked;
    }

    /**
     * @param mixed $Blocked
     */
    public function setBlocked($Blocked)
    {
        $this->Blocked = $Blocked;
    }

    /**
     * @return mixed
     */
    public function getBounce()
    {
        return $this->Bounce;
    }

    /**
     * @param mixed $Bounce
     */
    public function setBounce($Bounce)
    {
        $this->Bounce = $Bounce;
    }

    /**
     * @return mixed
     */
    public function getBounceDate()
    {
        return $this->BounceDate;
    }

    /**
     * @param mixed $BounceDate
     */
    public function setBounceDate($BounceDate)
    {
        $this->BounceDate = $BounceDate;
    }

    /**
     * @return mixed
     */
    public function getBounceReason()
    {
        return $this->BounceReason;
    }

    /**
     * @param mixed $BounceReason
     */
    public function setBounceReason($BounceReason)
    {
        $this->BounceReason = $BounceReason;
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
    public function getClick()
    {
        return $this->Click;
    }

    /**
     * @param mixed $Click
     */
    public function setClick($Click)
    {
        $this->Click = $Click;
    }

    /**
     * @return mixed
     */
    public function getCntRecipients()
    {
        return $this->CntRecipients;
    }

    /**
     * @param mixed $CntRecipients
     */
    public function setCntRecipients($CntRecipients)
    {
        $this->CntRecipients = $CntRecipients;
    }

    /**
     * @return mixed
     */
    public function getComplaintDate()
    {
        return $this->ComplaintDate;
    }

    /**
     * @param mixed $ComplaintDate
     */
    public function setComplaintDate($ComplaintDate)
    {
        $this->ComplaintDate = $ComplaintDate;
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
    public function getFBLSource()
    {
        return $this->FBLSource;
    }

    /**
     * @param mixed $FBLSource
     */
    public function setFBLSource($FBLSource)
    {
        $this->FBLSource = $FBLSource;
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
    public function getOpen()
    {
        return $this->Open;
    }

    /**
     * @param mixed $Open
     */
    public function setOpen($Open)
    {
        $this->Open = $Open;
    }

    /**
     * @return mixed
     */
    public function getQueued()
    {
        return $this->Queued;
    }

    /**
     * @param mixed $Queued
     */
    public function setQueued($Queued)
    {
        $this->Queued = $Queued;
    }

    /**
     * @return mixed
     */
    public function getSent()
    {
        return $this->Sent;
    }

    /**
     * @param mixed $Sent
     */
    public function setSent($Sent)
    {
        $this->Sent = $Sent;
    }

    /**
     * @return mixed
     */
    public function getSpam()
    {
        return $this->Spam;
    }

    /**
     * @param mixed $Spam
     */
    public function setSpam($Spam)
    {
        $this->Spam = $Spam;
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

    /**
     * @return mixed
     */
    public function getToEmail()
    {
        return $this->ToEmail;
    }

    /**
     * @param mixed $ToEmail
     */
    public function setToEmail($ToEmail)
    {
        $this->ToEmail = $ToEmail;
    }

    /**
     * @return mixed
     */
    public function getUnsub()
    {
        return $this->Unsub;
    }

    /**
     * @param mixed $Unsub
     */
    public function setUnsub($Unsub)
    {
        $this->Unsub = $Unsub;
    }
}
