<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CampaignOverview implements ModelInterface
{
    public static function getResource()
    {
        return 'campaignoverview';
    }

    /**
     * Clicked count
     * @Type("integer")
     * @SerializedName("ClickedCount")
     */
    protected $ClickedCount = null;

    /**
     * Edit mode
     * @Type("string")
     * @SerializedName("EditMode")
     */
    protected $EditMode = null;

    /**
     * Edit type
     * @Type("string")
     * @SerializedName("EditType")
     */
    protected $EditType = null;

    /**
     * Unique numerical ID for this object.
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Campaign, AX campaign or newsletter
     * @Type("string")
     * @SerializedName("IDType")
     */
    protected $IDType = null;

    /**
     * Opened count
     * @Type("integer")
     * @SerializedName("OpenedCount")
     */
    protected $OpenedCount = null;

    /**
     * How many items are processed
     * @Type("integer")
     * @SerializedName("ProcessedCount")
     */
    protected $ProcessedCount = null;

    /**
     * How many items are processed
     * @Type("integer")
     * @SerializedName("SendTimeStart")
     */
    protected $SendTimeStart = null;

    /**
     * Starred
     * @Type("boolean")
     * @SerializedName("Starred")
     */
    protected $Starred = null;

    /**
     * Status of the campaign
     * @Type("integer")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * Status of the campaign
     * @Type("string")
     * @SerializedName("Subject")
     */
    protected $Subject = null;

    /**
     * Title of the campaign
     * @Type("string")
     * @SerializedName("Title")
     */
    protected $Title = null;

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
    public function getEditMode()
    {
        return $this->EditMode;
    }

    /**
     * @param mixed $EditMode
     */
    public function setEditMode($EditMode)
    {
        $this->EditMode = $EditMode;
    }

    /**
     * @return mixed
     */
    public function getEditType()
    {
        return $this->EditType;
    }

    /**
     * @param mixed $EditType
     */
    public function setEditType($EditType)
    {
        $this->EditType = $EditType;
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
    public function getIDType()
    {
        return $this->IDType;
    }

    /**
     * @param mixed $IDType
     */
    public function setIDType($IDType)
    {
        $this->IDType = $IDType;
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
    public function getSendTimeStart()
    {
        return $this->SendTimeStart;
    }

    /**
     * @param mixed $SendTimeStart
     */
    public function setSendTimeStart($SendTimeStart)
    {
        $this->SendTimeStart = $SendTimeStart;
    }

    /**
     * @return mixed
     */
    public function getStarred()
    {
        return $this->Starred;
    }

    /**
     * @param mixed $Starred
     */
    public function setStarred($Starred)
    {
        $this->Starred = $Starred;
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
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }
}
