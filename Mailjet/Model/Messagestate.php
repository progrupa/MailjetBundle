<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Messagestate Model
 *
 * Message state reference
 */
class Messagestate implements ModelInterface
{
    public static function getResource()
    {
        return 'messagestate';
    }


    /**
     * Unique numerical ID for this object
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Reason for this state
     * @SerializedName("RelatedTo")
     */
    protected $RelatedTo = null;

    /**
     * Description of the message state
     * @SerializedName("State")
     */
    protected $State = null;

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
    public function getRelatedTo()
    {
        return $this->RelatedTo;
    }

    /**
     * @param mixed $RelatedTo
     */
    public function setRelatedTo($RelatedTo)
    {
        $this->RelatedTo = $RelatedTo;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param mixed $State
     */
    public function setState($State)
    {
        $this->State = $State;
    }
}
