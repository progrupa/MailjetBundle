<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Campaignstatistics Model
 *
 * Message statistics grouped by campaign
 */
class Campaignstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'campaignstatistics';
    }

    /**
     * A reference to AXtesting object
     * @Type("string")
     * @SerializedName("AXTesting")
     */
    protected $AXTesting = null;

    /**
     * Number of blocked messages.
     * @Type("integer")
     * @SerializedName("BlockedCount")
     */
    protected $BlockedCount = null;

    /**
     * Number of bounced messages.
     * @Type("integer")
     * @SerializedName("BouncedCount")
     */
    protected $BouncedCount = null;

    /**
     * ID reference to Campaign
     * @Type("integer")
     * @SerializedName("CampaignID")
     */
    protected $CampaignID = null;

    /**
     * Value of the CustomValue field of the related Campaign resource
     * @Type("string")
     * @SerializedName("CampaignALT")
     */
    protected $CampaignALT = null;

    /**
     * True if the campaign is starred
     * @Type("boolean")
     * @SerializedName("CampaignIsStarred")
     */
    protected $CampaignIsStarred = null;

    /**
     * When the campaign is started
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("CampaignSendStartAt")
     */
    protected $CampaignSendStartAt = null;

    /**
     * The subject of the campaign
     * @Type("string")
     * @SerializedName("CampaignSubject")
     */
    protected $CampaignSubject = null;

    /**
     * Number of registered clicks.
     * @Type("integer")
     * @SerializedName("ClickedCount")
     */
    protected $ClickedCount = null;

    /**
     * The name of the contact list where the campaign is sent. Available if ShowExtraData filter is True
     * @Type("string")
     * @SerializedName("ContactListName")
     */
    protected $ContactListName = null;

    /**
     * Number of messages delivered to their destination.
     * @Type("integer")
     * @SerializedName("DeliveredCount")
     */
    protected $DeliveredCount = null;

    /**
     * Timestamp of last registered activity for this Campaign
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("LastActivityAt")
     */
    protected $LastActivityAt = null;

    /**
     * Only retrieve campaign statistics for the given NewsLetter ID.
     * @Type("integer")
     * @SerializedName("NewsLetterID")
     */
    protected $NewsLetterID = null;

    /**
     * Number of message open registrations.
     * @Type("integer")
     * @SerializedName("OpenedCount")
     */
    protected $OpenedCount = null;

    /**
     * Total number of messages processed by Mailjet
     * @Type("integer")
     * @SerializedName("ProcessedCount")
     */
    protected $ProcessedCount = null;

    /**
     * Number of messages waiting in send queue
     * @Type("integer")
     * @SerializedName("QueuedCount")
     */
    protected $QueuedCount = null;

    /**
     * The name of the contact filter which is applied for this campaign. Available if ShowExtraData filter is True
     * @Type("string")
     * @SerializedName("SegmentName")
     */
    protected $SegmentName = null;

    /**
     * Number of spam complaints
     * @Type("integer")
     * @SerializedName("SpamComplaintCount")
     */
    protected $SpamComplaintCount = null;

    /**
     * The count of unsubscribed emails as result of this campaign
     * @Type("integer")
     * @SerializedName("UnsubscribedCount")
     */
    protected $UnsubscribedCount = null;

    /**
     * @return mixed
     */
    public function getAXTesting()
    {
        return $this->AXTesting;
    }

    /**
     * @param mixed $AXTesting
     */
    public function setAXTesting($AXTesting)
    {
        $this->AXTesting = $AXTesting;
    }

    /**
     * @return mixed
     */
    public function getBlockedCount()
    {
        return $this->BlockedCount;
    }

    /**
     * @param mixed $BlockedCount
     */
    public function setBlockedCount($BlockedCount)
    {
        $this->BlockedCount = $BlockedCount;
    }

    /**
     * @return mixed
     */
    public function getBouncedCount()
    {
        return $this->BouncedCount;
    }

    /**
     * @param mixed $BouncedCount
     */
    public function setBouncedCount($BouncedCount)
    {
        $this->BouncedCount = $BouncedCount;
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
    public function getCampaignIsStarred()
    {
        return $this->CampaignIsStarred;
    }

    /**
     * @param mixed $CampaignIsStarred
     */
    public function setCampaignIsStarred($CampaignIsStarred)
    {
        $this->CampaignIsStarred = $CampaignIsStarred;
    }

    /**
     * @return mixed
     */
    public function getCampaignSendStartAt()
    {
        return $this->CampaignSendStartAt;
    }

    /**
     * @param mixed $CampaignSendStartAt
     */
    public function setCampaignSendStartAt($CampaignSendStartAt)
    {
        $this->CampaignSendStartAt = $CampaignSendStartAt;
    }

    /**
     * @return mixed
     */
    public function getCampaignSubject()
    {
        return $this->CampaignSubject;
    }

    /**
     * @param mixed $CampaignSubject
     */
    public function setCampaignSubject($CampaignSubject)
    {
        $this->CampaignSubject = $CampaignSubject;
    }

    /**
     * @return mixed
     */
    public function getClickedCount()
    {
        return $this->ClickedCount;
    }

    /**
     * @param mixed $ClickedCount
     */
    public function setClickedCount($ClickedCount)
    {
        $this->ClickedCount = $ClickedCount;
    }

    /**
     * @return mixed
     */
    public function getContactListName()
    {
        return $this->ContactListName;
    }

    /**
     * @param mixed $ContactListName
     */
    public function setContactListName($ContactListName)
    {
        $this->ContactListName = $ContactListName;
    }

    /**
     * @return mixed
     */
    public function getDeliveredCount()
    {
        return $this->DeliveredCount;
    }

    /**
     * @param mixed $DeliveredCount
     */
    public function setDeliveredCount($DeliveredCount)
    {
        $this->DeliveredCount = $DeliveredCount;
    }

    /**
     * @return mixed
     */
    public function getLastActivityAt()
    {
        return $this->LastActivityAt;
    }

    /**
     * @param mixed $LastActivityAt
     */
    public function setLastActivityAt($LastActivityAt)
    {
        $this->LastActivityAt = $LastActivityAt;
    }

    /**
     * @return mixed
     */
    public function getNewsLetterID()
    {
        return $this->NewsLetterID;
    }

    /**
     * @param mixed $NewsLetterID
     */
    public function setNewsLetterID($NewsLetterID)
    {
        $this->NewsLetterID = $NewsLetterID;
    }

    /**
     * @return mixed
     */
    public function getOpenedCount()
    {
        return $this->OpenedCount;
    }

    /**
     * @param mixed $OpenedCount
     */
    public function setOpenedCount($OpenedCount)
    {
        $this->OpenedCount = $OpenedCount;
    }

    /**
     * @return mixed
     */
    public function getProcessedCount()
    {
        return $this->ProcessedCount;
    }

    /**
     * @param mixed $ProcessedCount
     */
    public function setProcessedCount($ProcessedCount)
    {
        $this->ProcessedCount = $ProcessedCount;
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
    public function getSegmentName()
    {
        return $this->SegmentName;
    }

    /**
     * @param mixed $SegmentName
     */
    public function setSegmentName($SegmentName)
    {
        $this->SegmentName = $SegmentName;
    }

    /**
     * @return mixed
     */
    public function getSpamComplaintCount()
    {
        return $this->SpamComplaintCount;
    }

    /**
     * @param mixed $SpamComplaintCount
     */
    public function setSpamComplaintCount($SpamComplaintCount)
    {
        $this->SpamComplaintCount = $SpamComplaintCount;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribedCount()
    {
        return $this->UnsubscribedCount;
    }

    /**
     * @param mixed $UnsubscribedCount
     */
    public function setUnsubscribedCount($UnsubscribedCount)
    {
        $this->UnsubscribedCount = $UnsubscribedCount;
    }
}
