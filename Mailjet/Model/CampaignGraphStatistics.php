<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class CampaignGraphStatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'campaigngraphstatistics';
    }

    /**
     * Number of clicks
     * @Type("integer")
     * @SerializedName("Clickcount")
     */
    protected $Clickcount = null;

    /**
     * Unique ID of the object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Number of opened messaged
     * @Type("integer")
     * @SerializedName("Opencount")
     */
    protected $Opencount = null;

    /**
     * Number of spam reports
     * @Type("integer")
     * @SerializedName("Spamcount")
     */
    protected $Spamcount = null;

    /**
     * The resolution for the statistics. Start of campaign=0, steps of 15 or 30 mins
     * @Type("integer")
     * @SerializedName("Tick")
     */
    protected $Tick = null;

    /**
     * Number of unsubscribed contacts
     * @Type("integer")
     * @SerializedName("Unsubcount")
     */
    protected $Unsubcount = null;

    /**
     * @return mixed
     */
    public function getClickcount()
    {
        return $this->Clickcount;
    }

    /**
     * @param mixed $Clickcount
     */
    public function setClickcount($Clickcount)
    {
        $this->Clickcount = $Clickcount;
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
    public function getOpencount()
    {
        return $this->Opencount;
    }

    /**
     * @param mixed $Opencount
     */
    public function setOpencount($Opencount)
    {
        $this->Opencount = $Opencount;
    }

    /**
     * @return mixed
     */
    public function getSpamcount()
    {
        return $this->Spamcount;
    }

    /**
     * @param mixed $Spamcount
     */
    public function setSpamcount($Spamcount)
    {
        $this->Spamcount = $Spamcount;
    }

    /**
     * @return mixed
     */
    public function getTick()
    {
        return $this->Tick;
    }

    /**
     * @param mixed $Tick
     */
    public function setTick($Tick)
    {
        $this->Tick = $Tick;
    }

    /**
     * @return mixed
     */
    public function getUnsubcount()
    {
        return $this->Unsubcount;
    }

    /**
     * @param mixed $Unsubcount
     */
    public function setUnsubcount($Unsubcount)
    {
        $this->Unsubcount = $Unsubcount;
    }
}
