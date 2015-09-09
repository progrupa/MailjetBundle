<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Bouncestatistics Model
 *
 * Message bounce statistics for an API Key
 */
class Bouncestatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'bouncestatistics';
    }

    /**
     * Timestamp of bounce
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("BouncedAt")
     */
    protected $BouncedAt = null;

    /**
     * Reference to Campaign for which bounce occurred
     * @Type("integer")
     * @SerializedName("CampaignID")
     */
    protected $CampaignID = null;

    /**
     * Reference to Campaign for which bounce occurred
     * @Type("string")
     * @SerializedName("CampaignALT")
     */
    protected $CampaignALT = null;

    /**
     * Reference to Contact for which bounce occurred
     * @Type("integer")
     * @SerializedName("ContactID")
     */
    protected $ContactID = null;

    /**
     * Reference to Contact for which bounce occurred
     * @Type("string")
     * @SerializedName("ContactALT")
     */
    protected $ContactALT = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Is contact blocked
     * @Type("boolean")
     * @SerializedName("IsBlocked")
     */
    protected $IsBlocked = false;

    /**
     * Is this a permanent bounce
     * @Type("boolean")
     * @SerializedName("IsStatePermanent")
     */
    protected $IsStatePermanent = false;

    /**
     * Current state of the message causing the bounce
     * @Type("integer")
     * @SerializedName("StateID")
     */
    protected $StateID = null;

    /**
     * @return mixed
     */
    public function getBouncedAt()
    {
        return $this->BouncedAt;
    }

    /**
     * @param mixed $BouncedAt
     */
    public function setBouncedAt($BouncedAt)
    {
        $this->BouncedAt = $BouncedAt;
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
    public function getIsBlocked()
    {
        return $this->IsBlocked;
    }

    /**
     * @param mixed $IsBlocked
     */
    public function setIsBlocked($IsBlocked)
    {
        $this->IsBlocked = $IsBlocked;
    }

    /**
     * @return mixed
     */
    public function getIsStatePermanent()
    {
        return $this->IsStatePermanent;
    }

    /**
     * @param mixed $IsStatePermanent
     */
    public function setIsStatePermanent($IsStatePermanent)
    {
        $this->IsStatePermanent = $IsStatePermanent;
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
}
