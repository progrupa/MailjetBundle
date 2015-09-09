<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CampaignAggregate implements ModelInterface
{
    public static function getResource()
    {
        return 'campaignaggregate';
    }

    /**
     * Array of campaign id’s
     * @Type("array")
     * @SerializedName("CampaignIDS")
     */
    protected $CampaignIDS = null;

    /**
     * ID reference to ContactFilter
     * @Type("integer")
     * @SerializedName("ContactFilterID")
     */
    protected $ContactFilterID = null;

    /**
     * Value of the Name field of the related ContactFilter resource
     * @Type("string")
     * @SerializedName("ContactFilterALT")
     */
    protected $ContactFilterALT = null;

    /**
     * ID reference to ContactsList
     * @Type("integer")
     * @SerializedName("ContactListID")
     */
    protected $ContactListID = null;

    /**
     * Value of the Address field of the related ContactsList resource
     * @Type("string")
     * @SerializedName("ContactListALT")
     */
    protected $ContactListALT = null;

    /**
     * Need to recalculate aggregates or not
     * @Type("boolean")
     * @SerializedName("Final")
     */
    protected $Final = null;

    /**
     * Filter campaigns on start date
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("FromDate")
     */
    protected $FromDate = null;

    /**
     * Unique ID of the object
     * @Type("string")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Filter campaigns on keyword in subject
     * @Type("string")
     * @SerializedName("Keyword")
     */
    protected $Keyword = null;

    /**
     * Name of the aggregate
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * ID reference to Sender
     * @Type("integer")
     * @SerializedName("SenderID")
     */
    protected $SenderID = null;

    /**
     * Value of the Email field of the related Sender resource
     * @Type("string")
     * @SerializedName("SenderALT")
     */
    protected $SenderALT = null;

    /**
     * Filter campaigns on end date
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("ToDate")
     */
    protected $ToDate = null;

    /**
     * @return mixed
     */
    public function getCampaignIDS()
    {
        return $this->CampaignIDS;
    }

    /**
     * @param mixed $CampaignIDS
     */
    public function setCampaignIDS($CampaignIDS)
    {
        $this->CampaignIDS = $CampaignIDS;
    }

    /**
     * @return mixed
     */
    public function getContactFilterID()
    {
        return $this->ContactFilterID;
    }

    /**
     * @param mixed $ContactFilterID
     */
    public function setContactFilterID($ContactFilterID)
    {
        $this->ContactFilterID = $ContactFilterID;
    }

    /**
     * @return mixed
     */
    public function getContactFilterALT()
    {
        return $this->ContactFilterALT;
    }

    /**
     * @param mixed $ContactFilterALT
     */
    public function setContactFilterALT($ContactFilterALT)
    {
        $this->ContactFilterALT = $ContactFilterALT;
    }

    /**
     * @return mixed
     */
    public function getContactListID()
    {
        return $this->ContactListID;
    }

    /**
     * @param mixed $ContactListID
     */
    public function setContactListID($ContactListID)
    {
        $this->ContactListID = $ContactListID;
    }

    /**
     * @return mixed
     */
    public function getContactListALT()
    {
        return $this->ContactListALT;
    }

    /**
     * @param mixed $ContactListALT
     */
    public function setContactListALT($ContactListALT)
    {
        $this->ContactListALT = $ContactListALT;
    }

    /**
     * @return mixed
     */
    public function getFinal()
    {
        return $this->Final;
    }

    /**
     * @param mixed $Final
     */
    public function setFinal($Final)
    {
        $this->Final = $Final;
    }

    /**
     * @return mixed
     */
    public function getFromDate()
    {
        return $this->FromDate;
    }

    /**
     * @param mixed $FromDate
     */
    public function setFromDate($FromDate)
    {
        $this->FromDate = $FromDate;
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
    public function getKeyword()
    {
        return $this->Keyword;
    }

    /**
     * @param mixed $Keyword
     */
    public function setKeyword($Keyword)
    {
        $this->Keyword = $Keyword;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getSenderID()
    {
        return $this->SenderID;
    }

    /**
     * @param mixed $SenderID
     */
    public function setSenderID($SenderID)
    {
        $this->SenderID = $SenderID;
    }

    /**
     * @return mixed
     */
    public function getSenderALT()
    {
        return $this->SenderALT;
    }

    /**
     * @param mixed $SenderALT
     */
    public function setSenderALT($SenderALT)
    {
        $this->SenderALT = $SenderALT;
    }

    /**
     * @return mixed
     */
    public function getToDate()
    {
        return $this->ToDate;
    }

    /**
     * @param mixed $ToDate
     */
    public function setToDate($ToDate)
    {
        $this->ToDate = $ToDate;
    }
}
