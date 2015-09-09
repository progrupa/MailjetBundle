<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Apitoken Model
 *
 * Access token for API
 */
class Apitoken extends AbstractModel
{
    public static function getResource()
    {
        return 'apitoken';
    }

    /**
     * @Type("string")
     * @SerializedName("ACL")
     */
    protected $ACL = null;

    /**
     * Access rights of this token, in serialized PHP.
     * @Type("string")
     * @SerializedName("AllowedAccess")
     */
    protected $AllowedAccess = null;

    /**
     * Reference to API Key to which this token belongs.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $APIKeyID = null;

    /**
     * Reference to API Key to which this token belongs.
     * @Type("string")
     * @SerializedName("APIKeyALT")
     */
    protected $APIKeyALT = null;

    /**
     * Last registered IP address for this token.
     * @Type("string")
     * @SerializedName("CatchedIp")
     */
    protected $CatchedIp = null;

    /**
     * Timestamp of first use of this token.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("FirstUsedAt")
     */
    protected $FirstUsedAt = null;

    /**
     * Is this token still active
     * @Type("boolean")
     * @SerializedName("IsActive")
     */
    protected $IsActive = false;

    /**
     * Language (locale) for this token.
     * @Type("string")
     * @SerializedName("Lang")
     */
    protected $Lang = null;

    /**
     * Timestamp of last use of this token.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("LastUsedAt")
     */
    protected $LastUsedAt = null;

    /**
     * Payload for this token.
     * @Type("string")
     * @SerializedName("SentData")
     */
    protected $SentData = null;

    /**
     * Timezone to use for this token.
     * @Type("string")
     * @SerializedName("Timezone")
     */
    protected $Timezone = null;

    /**
     * Unique identifier for this token, to be used by user.
     * @Type("string")
     * @SerializedName("Token")
     */
    protected $Token = null;

    /**
     * Type of token
     * @Type("string")
     * @SerializedName("TokenType")
     */
    protected $TokenType = null;

    /**
     * Period during which token is considered valid.
     * @Type("integer")
     * @SerializedName("ValidFor")
     */
    protected $ValidFor = null;

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
    public function getCatchedIp()
    {
        return $this->CatchedIp;
    }

    /**
     * @param mixed $CatchedIp
     */
    public function setCatchedIp($CatchedIp)
    {
        $this->CatchedIp = $CatchedIp;
    }

    /**
     * @return mixed
     */
    public function getFirstUsedAt()
    {
        return $this->FirstUsedAt;
    }

    /**
     * @param mixed $FirstUsedAt
     */
    public function setFirstUsedAt($FirstUsedAt)
    {
        $this->FirstUsedAt = $FirstUsedAt;
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
    public function getLang()
    {
        return $this->Lang;
    }

    /**
     * @param mixed $Lang
     */
    public function setLang($Lang)
    {
        $this->Lang = $Lang;
    }

    /**
     * @return mixed
     */
    public function getLastUsedAt()
    {
        return $this->LastUsedAt;
    }

    /**
     * @param mixed $LastUsedAt
     */
    public function setLastUsedAt($LastUsedAt)
    {
        $this->LastUsedAt = $LastUsedAt;
    }

    /**
     * @return mixed
     */
    public function getSentData()
    {
        return $this->SentData;
    }

    /**
     * @param mixed $SentData
     */
    public function setSentData($SentData)
    {
        $this->SentData = $SentData;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->Timezone;
    }

    /**
     * @param mixed $Timezone
     */
    public function setTimezone($Timezone)
    {
        $this->Timezone = $Timezone;
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
    public function getTokenType()
    {
        return $this->TokenType;
    }

    /**
     * @param mixed $TokenType
     */
    public function setTokenType($TokenType)
    {
        $this->TokenType = $TokenType;
    }

    /**
     * @return mixed
     */
    public function getValidFor()
    {
        return $this->ValidFor;
    }

    /**
     * @param mixed $ValidFor
     */
    public function setValidFor($ValidFor)
    {
        $this->ValidFor = $ValidFor;
    }
}
