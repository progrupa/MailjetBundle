<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Apikey Model
 *
 * Mailjet API Keys
 */
class Apikey extends AbstractModel
{
    public static function getResource()
    {
        return 'apikey';
    }

    /**
     * @Type("string")
     * @SerializedName("ACL")
     */
    protected $ACL = null;

    /**
     * The unique key for this API Key
     * @Type("string")
     * @SerializedName("APIKey")
     */
    protected $APIKey = null;

    /**
     * Is this API Key active ?
     * @Type("boolean")
     * @SerializedName("IsActive")
     */
    protected $IsActive = false;

    /**
     * Is this API Key the master key for the user
     * @Type("boolean")
     * @SerializedName("IsMaster")
     */
    protected $IsMaster = false;

    /**
     * User readable name for this API Key
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * QuarantineValue
     * @Type("string")
     * @SerializedName("QuarantineValue")
     */
    protected $QuarantineValue = null;

    /**
     * Runlevel, used to indicate data is migrated and reduced performance is expected.
     * @Type("string")
     * @SerializedName("Runlevel")
     */
    protected $Runlevel = 'Normal';

    /**
     * Secret key for this API Key (equivalent to password).
     * @Type("string")
     * @SerializedName("SecretKey")
     */
    protected $SecretKey = '';

    /**
     * Host to be used when tracking clicks, opens, unsub requests for this API Key.
     * @Type("string")
     * @SerializedName("TrackHost")
     */
    protected $TrackHost = '';

    /**
     * User ID for this API key
     * @Type("integer")
     * @SerializedName("UserID")
     */
    protected $UserID = null;

    /**
     * @return mixed
     */
    public function getACL()
    {
        return $this->ACL;
    }

    /**
     * @param mixed $ACL
     */
    public function setACL($ACL)
    {
        $this->ACL = $ACL;
    }

    /**
     * @return mixed
     */
    public function getAPIKey()
    {
        return $this->APIKey;
    }

    /**
     * @param mixed $APIKey
     */
    public function setAPIKey($APIKey)
    {
        $this->APIKey = $APIKey;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param mixed $IsActive
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
    }

    /**
     * @return mixed
     */
    public function getIsMaster()
    {
        return $this->IsMaster;
    }

    /**
     * @param mixed $IsMaster
     */
    public function setIsMaster($IsMaster)
    {
        $this->IsMaster = $IsMaster;
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
    public function getQuarantineValue()
    {
        return $this->QuarantineValue;
    }

    /**
     * @param mixed $QuarantineValue
     */
    public function setQuarantineValue($QuarantineValue)
    {
        $this->QuarantineValue = $QuarantineValue;
    }

    /**
     * @return mixed
     */
    public function getRunlevel()
    {
        return $this->Runlevel;
    }

    /**
     * @param mixed $Runlevel
     */
    public function setRunlevel($Runlevel)
    {
        $this->Runlevel = $Runlevel;
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->SecretKey;
    }

    /**
     * @param mixed $SecretKey
     */
    public function setSecretKey($SecretKey)
    {
        $this->SecretKey = $SecretKey;
    }

    /**
     * @return mixed
     */
    public function getTrackHost()
    {
        return $this->TrackHost;
    }

    /**
     * @param mixed $TrackHost
     */
    public function setTrackHost($TrackHost)
    {
        $this->TrackHost = $TrackHost;
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
}

