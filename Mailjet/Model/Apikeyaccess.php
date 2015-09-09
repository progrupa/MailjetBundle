<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Apikeyaccess Model
 *
 * Access rights description on API keys for subaccounts/users
 */
class Apikeyaccess extends AbstractModel
{
    public static function getResource()
    {
        return 'apikeyaccess';
    }

    /**
     * JSON describing access rights.
     * @Type("string")
     * @SerializedName("AllowedAccess")
     */
    protected $AllowedAccess = null;

    /**
     * API key for which the rights are descibed.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $APIKeyID = null;

    /**
     * API key for which the rights are descibed.
     * @Type("string")
     * @SerializedName("APIKeyALT")
     */
    protected $APIKeyALT = null;

    /**
     * Custom name for this set of rights
     * @Type("string")
     * @SerializedName("CustomName")
     */
    protected $CustomName = null;

    /**
     * Is this object active (rights enforced) or not
     * @Type("boolean")
     * @SerializedName("IsActive")
     */
    protected $IsActive = false;

    /**
     * Timestamp of last registered activity for this API Key
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("LastActivityAt")
     */
    protected $LastActivityAt = null;

    /**
     * Reference to Real user
     * @Type("integer")
     * @SerializedName("RealUserID")
     */
    protected $RealUserID = null;

    /**
     * Reference to Real user
     * @Type("string")
     * @SerializedName("RealUserALT")
     */
    protected $RealUserALT = null;

    /**
     * Reference to subaccount
     * @Type("integer")
     * @SerializedName("SubaccountID")
     */
    protected $SubaccountID = null;

    /**
     * Unique Token used to retrieve these access rights.
     * @Type("string")
     * @SerializedName("Token")
     */
    protected $Token = null;

    /**
     * Timestamp when object was last updated in database.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("UpdatedAt")
     */
    protected $UpdatedAt = null;

    /**
     * Reference to user for whom access is described.
     * @Type("integer")
     * @SerializedName("UserID")
     */
    protected $UserID = null;

    /**
     * Reference to user for whom access is described.
     * @Type("string")
     * @SerializedName("UserALT")
     */
    protected $UserALT = null;

    /**
     * @return mixed
     */
    public function getAllowedAccess()
    {
        return $this->AllowedAccess;
    }

    /**
     * @param mixed $AllowedAccess
     */
    public function setAllowedAccess($AllowedAccess)
    {
        $this->AllowedAccess = $AllowedAccess;
    }

    /**
     * @return mixed
     */
    public function getAPIKeyID()
    {
        return $this->APIKeyID;
    }

    /**
     * @param mixed $APIKeyID
     */
    public function setAPIKeyID($APIKeyID)
    {
        $this->APIKeyID = $APIKeyID;
    }

    /**
     * @return mixed
     */
    public function getAPIKeyALT()
    {
        return $this->APIKeyALT;
    }

    /**
     * @param mixed $APIKeyALT
     */
    public function setAPIKeyALT($APIKeyALT)
    {
        $this->APIKeyALT = $APIKeyALT;
    }

    /**
     * @return mixed
     */
    public function getCustomName()
    {
        return $this->CustomName;
    }

    /**
     * @param mixed $CustomName
     */
    public function setCustomName($CustomName)
    {
        $this->CustomName = $CustomName;
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
    public function getRealUserID()
    {
        return $this->RealUserID;
    }

    /**
     * @param mixed $RealUserID
     */
    public function setRealUserID($RealUserID)
    {
        $this->RealUserID = $RealUserID;
    }

    /**
     * @return mixed
     */
    public function getRealUserALT()
    {
        return $this->RealUserALT;
    }

    /**
     * @param mixed $RealUserALT
     */
    public function setRealUserALT($RealUserALT)
    {
        $this->RealUserALT = $RealUserALT;
    }

    /**
     * @return mixed
     */
    public function getSubaccountID()
    {
        return $this->SubaccountID;
    }

    /**
     * @param mixed $SubaccountID
     */
    public function setSubaccountID($SubaccountID)
    {
        $this->SubaccountID = $SubaccountID;
    }

    /**
     * @return mixed
     */
    public function getToken()
    {
        return $this->Token;
    }

    /**
     * @param mixed $Token
     */
    public function setToken($Token)
    {
        $this->Token = $Token;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->UpdatedAt;
    }

    /**
     * @param mixed $UpdatedAt
     */
    public function setUpdatedAt($UpdatedAt)
    {
        $this->UpdatedAt = $UpdatedAt;
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
}
