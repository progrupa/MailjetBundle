<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

class AggregateGraphStatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'aggregategraphstatistics';
    }

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("BlockedCount")
     */
    protected $BlockedCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("BlockedStdDev")
     */
    protected $BlockedStdDev = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("BouncedCount")
     */
    protected $BouncedCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("BouncedStdDev")
     */
    protected $BouncedStdDev = null;

    /**
     * Number of clicks
     * @Type("integer")
     * @SerializedName("CampaignAggregateID")
     */
    protected $CampaignAggregateID = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("ClickedCount")
     */
    protected $ClickedCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("ClickedStdDev")
     */
    protected $ClickedStdDev = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("OpenedCount")
     */
    protected $OpenedCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("OpenedStdDev")
     */
    protected $OpenedStdDev = null;

    /**
     * Number of clicks
     * @Type("integer")
     * @SerializedName("RefTimestamp")
     */
    protected $RefTimestamp = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("SentCount")
     */
    protected $SentCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("SentStdDev")
     */
    protected $SentStdDev = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("SpamComplaintCount")
     */
    protected $SpamComplaintCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("SpamcomplaintStdDev")
     */
    protected $SpamcomplaintStdDev = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("UnsubscribedCount")
     */
    protected $UnsubscribedCount = null;

    /**
     * Number of clicks
     * @Type("float")
     * @SerializedName("UnsubscribedStdDev")
     */
    protected $UnsubscribedStdDev = null;

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
    public function getBlockedStdDev()
    {
        return $this->BlockedStdDev;
    }

    /**
     * @param mixed $BlockedStdDev
     */
    public function setBlockedStdDev($BlockedStdDev)
    {
        $this->BlockedStdDev = $BlockedStdDev;
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
    public function getBouncedStdDev()
    {
        return $this->BouncedStdDev;
    }

    /**
     * @param mixed $BouncedStdDev
     */
    public function setBouncedStdDev($BouncedStdDev)
    {
        $this->BouncedStdDev = $BouncedStdDev;
    }

    /**
     * @return mixed
     */
    public function getCampaignAggregateID()
    {
        return $this->CampaignAggregateID;
    }

    /**
     * @param mixed $CampaignAggregateID
     */
    public function setCampaignAggregateID($CampaignAggregateID)
    {
        $this->CampaignAggregateID = $CampaignAggregateID;
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
    public function getClickedStdDev()
    {
        return $this->ClickedStdDev;
    }

    /**
     * @param mixed $ClickedStdDev
     */
    public function setClickedStdDev($ClickedStdDev)
    {
        $this->ClickedStdDev = $ClickedStdDev;
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
    public function getOpenedStdDev()
    {
        return $this->OpenedStdDev;
    }

    /**
     * @param mixed $OpenedStdDev
     */
    public function setOpenedStdDev($OpenedStdDev)
    {
        $this->OpenedStdDev = $OpenedStdDev;
    }

    /**
     * @return mixed
     */
    public function getRefTimestamp()
    {
        return $this->RefTimestamp;
    }

    /**
     * @param mixed $RefTimestamp
     */
    public function setRefTimestamp($RefTimestamp)
    {
        $this->RefTimestamp = $RefTimestamp;
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
    public function getSentStdDev()
    {
        return $this->SentStdDev;
    }

    /**
     * @param mixed $SentStdDev
     */
    public function setSentStdDev($SentStdDev)
    {
        $this->SentStdDev = $SentStdDev;
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
    public function getSpamcomplaintStdDev()
    {
        return $this->SpamcomplaintStdDev;
    }

    /**
     * @param mixed $SpamcomplaintStdDev
     */
    public function setSpamcomplaintStdDev($SpamcomplaintStdDev)
    {
        $this->SpamcomplaintStdDev = $SpamcomplaintStdDev;
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

    /**
     * @return mixed
     */
    public function getUnsubscribedStdDev()
    {
        return $this->UnsubscribedStdDev;
    }

    /**
     * @param mixed $UnsubscribedStdDev
     */
    public function setUnsubscribedStdDev($UnsubscribedStdDev)
    {
        $this->UnsubscribedStdDev = $UnsubscribedStdDev;
    }
}
