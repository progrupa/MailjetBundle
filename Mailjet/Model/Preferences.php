<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Preferences Model
 *
 * User preferences in key=value format
 */
class Preferences implements ModelInterface
{
    public static function getResource()
    {
        return 'preferences';
    }

    /**
     * Unique numerical ID for this object
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Name of preference
     * @SerializedName("Key")
     */
    protected $Key = null;

    /**
     * ID reference to User
     * @SerializedName("UserID")
     */
    protected $UserID = null;

    /**
     * Value of the Email field of the related User resource
     * @SerializedName("UserALT")
     */
    protected $UserALT = null;

    /**
     * Value of preference
     * @SerializedName("Value")
     */
    protected $Value = null;

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
    public function getKey()
    {
        return $this->Key;
    }

    /**
     * @param mixed $Key
     */
    public function setKey($Key)
    {
        $this->Key = $Key;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param mixed $UserID
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
    }

    /**
     * @return mixed
     */
    public function getUserALT()
    {
        return $this->UserALT;
    }

    /**
     * @param mixed $UserALT
     */
    public function setUserALT($UserALT)
    {
        $this->UserALT = $UserALT;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
    }
}
