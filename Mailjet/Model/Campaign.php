<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Campaign Model
 *
 * Campaigns (or transactional messages) sent by an API key.
 */
class Campaign extends AbstractModel
{
    public static function getResource()
    {
        return 'campaign';
    }

    /**
     * Type of campaign (transactional, campaign)
     * @Type("integer")
     * @SerializedName("CampaignType")
     */
    protected $CampaignType = null;

    /**
     * Number of messages for which click tracking is requested.
     * @Type("integer")
     * @SerializedName("ClickTracked")
     */
    protected $ClickTracked = null;

    /**
     * Custom tag for this campaign, must be unique.
     * @Type("string")
     * @SerializedName("CustomValue")
     */
    protected $CustomValue = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("FirstMessageID")
     */
    protected $FirstMessageID = null;

    /**
     * Sender of the campaign
     * @Type("integer")
     * @SerializedName("FromID")
     */
    protected $FromID = null;

    /**
     * Sender of the campaign
     * @Type("string")
     * @SerializedName("FromALT")
     */
    protected $FromALT = null;

    /**
     * Sender email address for the campaign
     * @Type("string")
     * @SerializedName("FromEmail")
     */
    protected $FromEmail = null;

    /**
     * Sender name for the campaign
     * @Type("string")
     * @SerializedName("FromName")
     */
    protected $FromName = null;

    /**
     * Number of messages containing HTML in this campaign.
     * @Type("integer")
     * @SerializedName("HasHtmlCount")
     */
    protected $HasHtmlCount = null;

    /**
     * Number of messages containing HTML in this campaign.
     * @Type("integer")
     * @SerializedName("HasTxtCount")
     */
    protected $HasTxtCount = null;

    /**
     * Has the campaign been deleted by the user.
     * @Type("boolean")
     * @SerializedName("IsDeleted")
     */
    protected $IsDeleted = false;

    /**
     * Is this campaign marked as starred?
     * @Type("boolean")
     * @SerializedName("IsStarred")
     */
    protected $IsStarred = false;

    /**
     * Reference to contactslist to which campaign is sent.
     * @Type("integer")
     * @SerializedName("ListID")
     */
    protected $ListID = null;

    /**
     * Reference to contactslist to which campaign is sent.
     * @Type("string")
     * @SerializedName("ListALT")
     */
    protected $ListALT = null;

    /**
     * Newletter ID for which the campaign was created.
     * @Type("integer")
     * @SerializedName("NewsLetterID")
     */
    protected $NewsLetterID = null;

    /**
     * Number of messages for which open tracking is requested.
     * @Type("integer")
     * @SerializedName("OpenTracked")
     */
    protected $OpenTracked = null;

    /**
     * Timestamp indicating when last message in this campaign was sent.
     * @Type("integer")
     * @SerializedName("SegmentationID")
     */
    protected $SegmentationID = null;

    /**
     * Timestamp indicating when last message in this campaign was sent.
     * @Type("string")
     * @SerializedName("SegmentationALT")
     */
    protected $SegmentationALT = null;

    /**
     * Timestamp indicating when last message in this campaign was sent.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("SendEndAt")
     */
    protected $SendEndAt = null;

    /**
     * Timestamp indicating when first message in this campaign was sent.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("SendStartAt")
     */
    protected $SendStartAt = null;

    /**
     * Spam Assassin score for this campaign.
     * @Type("integer")
     * @SerializedName("SpamassScore")
     */
    protected $SpamassScore = null;

    /**
     * Status of this campaign
     * @Type("integer")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * Campaign subject
     * @Type("string")
     * @SerializedName("Subject")
     */
    protected $Subject = null;

    /**
     * Number of messages for which unsubscribe tracking is requested.
     * @Type("integer")
     * @SerializedName("UnsubscribeTrackedCount")
     */
    protected $UnsubscribeTrackedCount = null;

    /**
     * @return mixed
     */
    public function getCampaignType()
    {
        return $this->CampaignType;
    }

    /**
     * @param mixed $CampaignType
     */
    public function setCampaignType($CampaignType)
    {
        $this->CampaignType = $CampaignType;
    }

    /**
     * @return mixed
     */
    public function getClickTracked()
    {
        return $this->ClickTracked;
    }

    /**
     * @param mixed $ClickTracked
     */
    public function setClickTracked($ClickTracked)
    {
        $this->ClickTracked = $ClickTracked;
    }

    /**
     * @return mixed
     */
    public function getCustomValue()
    {
        return $this->CustomValue;
    }

    /**
     * @param mixed $CustomValue
     */
    public function setCustomValue($CustomValue)
    {
        $this->CustomValue = $CustomValue;
    }

    /**
     * @return mixed
     */
    public function getFirstMessageID()
    {
        return $this->FirstMessageID;
    }

    /**
     * @param mixed $FirstMessageID
     */
    public function setFirstMessageID($FirstMessageID)
    {
        $this->FirstMessageID = $FirstMessageID;
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
    public function getFromEmail()
    {
        return $this->FromEmail;
    }

    /**
     * @param mixed $FromEmail
     */
    public function setFromEmail($FromEmail)
    {
        $this->FromEmail = $FromEmail;
    }

    /**
     * @return mixed
     */
    public function getFromName()
    {
        return $this->FromName;
    }

    /**
     * @param mixed $FromName
     */
    public function setFromName($FromName)
    {
        $this->FromName = $FromName;
    }

    /**
     * @return mixed
     */
    public function getHasHtmlCount()
    {
        return $this->HasHtmlCount;
    }

    /**
     * @param mixed $HasHtmlCount
     */
    public function setHasHtmlCount($HasHtmlCount)
    {
        $this->HasHtmlCount = $HasHtmlCount;
    }

    /**
     * @return mixed
     */
    public function getHasTxtCount()
    {
        return $this->HasTxtCount;
    }

    /**
     * @param mixed $HasTxtCount
     */
    public function setHasTxtCount($HasTxtCount)
    {
        $this->HasTxtCount = $HasTxtCount;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param mixed $IsDeleted
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
    }

    /**
     * @return mixed
     */
    public function getIsStarred()
    {
        return $this->IsStarred;
    }

    /**
     * @param mixed $IsStarred
     */
    public function setIsStarred($IsStarred)
    {
        $this->IsStarred = $IsStarred;
    }

    /**
     * @return mixed
     */
    public function getListID()
    {
        return $this->ListID;
    }

    /**
     * @param mixed $ListID
     */
    public function setListID($ListID)
    {
        $this->ListID = $ListID;
    }

    /**
     * @return mixed
     */
    public function getListALT()
    {
        return $this->ListALT;
    }

    /**
     * @param mixed $ListALT
     */
    public function setListALT($ListALT)
    {
        $this->ListALT = $ListALT;
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
    public function getOpenTracked()
    {
        return $this->OpenTracked;
    }

    /**
     * @param mixed $OpenTracked
     */
    public function setOpenTracked($OpenTracked)
    {
        $this->OpenTracked = $OpenTracked;
    }

    /**
     * @return mixed
     */
    public function getSegmentationID()
    {
        return $this->SegmentationID;
    }

    /**
     * @param mixed $SegmentationID
     */
    public function setSegmentationID($SegmentationID)
    {
        $this->SegmentationID = $SegmentationID;
    }

    /**
     * @return mixed
     */
    public function getSegmentationALT()
    {
        return $this->SegmentationALT;
    }

    /**
     * @param mixed $SegmentationALT
     */
    public function setSegmentationALT($SegmentationALT)
    {
        $this->SegmentationALT = $SegmentationALT;
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
    public function getSendStartAt()
    {
        return $this->SendStartAt;
    }

    /**
     * @param mixed $SendStartAt
     */
    public function setSendStartAt($SendStartAt)
    {
        $this->SendStartAt = $SendStartAt;
    }

    /**
     * @return mixed
     */
    public function getSpamassScore()
    {
        return $this->SpamassScore;
    }

    /**
     * @param mixed $SpamassScore
     */
    public function setSpamassScore($SpamassScore)
    {
        $this->SpamassScore = $SpamassScore;
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
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param mixed $Subject
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribeTrackedCount()
    {
        return $this->UnsubscribeTrackedCount;
    }

    /**
     * @param mixed $UnsubscribeTrackedCount
     */
    public function setUnsubscribeTrackedCount($UnsubscribeTrackedCount)
    {
        $this->UnsubscribeTrackedCount = $UnsubscribeTrackedCount;
    }
}
