<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * User Model
 *
 * Mailjet User account definition
 */
class User extends AbstractModel
{
    public static function getResource()
    {
        return 'user';
    }

    /**
     * Reference to administrator assigned to this user
     * @Type("string")
     * @SerializedName("ACL")
     */
    protected $ACL = null;

    /**
     * Email address of user
     * @Type("string")
     * @SerializedName("$Email")
     */
    protected $Email = null;

    /**
     * Is the user activated
     * @Type("boolean")
     * @SerializedName("$IsActivated")
     */
    protected $IsActivated = false;

    /**
     * Is the user banned ?
     * @Type("boolean")
     * @SerializedName("$IsBanned")
     */
    protected $IsBanned = false;

    /**
     * Is the user part of the Beta testers [?]
     * @Type("boolean")
     * @SerializedName("$IsBeta")
     */
    protected $IsBeta = false;

    /**
     * Is the user allowed to pay cash ?
     * @Type("boolean")
     * @SerializedName("$IsCashAllowed")
     */
    protected $IsCashAllowed = false;

    /**
     * Is the user information complete ?
     * @Type("boolean")
     * @SerializedName("$IsCompleted")
     */
    protected $IsCompleted = false;

    /**
     * Is the user profile complete ?
     * @Type("boolean")
     * @SerializedName("$IsProfileCompleted")
     */
    protected $IsProfileCompleted = false;

    /**
     * Has the user accepted the Mailjet Rules ?
     * @Type("boolean")
     * @SerializedName("$IsRulesAccepted")
     */
    protected $IsRulesAccepted = false;

    /**
     * Has the user been temporarily blocked ?
     * @Type("boolean")
     * @SerializedName("$IsTemporaryBlocked")
     */
    protected $IsTemporaryBlocked = false;

    /**
     * Locale in which the information in this record is recorded.
     * @Type("string")
     * @SerializedName("$LastIp")
     */
    protected $LastIp = null;

    /**
     * Timestamp when user last logged in.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("$LastLoginAt")
     */
    protected $LastLoginAt = null;

    /**
     * Locale in which the information in this record is recorded.
     * @Type("string")
     * @SerializedName("$Locale")
     */
    protected $Locale = null;

    /**
     * Maximum number of API keys the user is allowed to have.
     * @Type("string")
     * @SerializedName("$MaxAllowedAPIKeys")
     */
    protected $MaxAllowedAPIKeys = null;

    /**
     * Timestamp when user data was last modified.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("$ModifiedAt")
     */
    protected $ModifiedAt = null;

    /**
     * New email in case of email change
     * @Type("string")
     * @SerializedName("$NewEmail")
     */
    protected $NewEmail = null;

    /**
     * Timestamp when new password was requested.
     * @Type("string")
     * @SerializedName("$NewPasswordRequestedAt")
     */
    protected $NewPasswordRequestedAt = null;

    /**
     * Timezone for this user
     * @Type("string")
     * @SerializedName("$Timezone")
     */
    protected $Timezone = null;

    /**
     * User's Last UMP score
     * @Type("string")
     * @SerializedName("$UMPScoreLast")
     */
    protected $UMPScoreLast = null;

    /**
     * User's original UMP score
     * @Type("string")
     * @SerializedName("$UMPScoreOrig")
     */
    protected $UMPScoreOrig = null;

    /**
     * User name
     * @Type("string")
     * @SerializedName("$Username")
     */
    protected $Username = null;

    /**
     * Timestamp when user was last warned about hitting his rate limit.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("$WarnedRatelimitAt")
     */
    protected $WarnedRatelimitAt = null;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getIsActivated()
    {
        return $this->IsActivated;
    }

    /**
     * @param mixed $IsActivated
     */
    public function setIsActivated($IsActivated)
    {
        $this->IsActivated = $IsActivated;
    }

    /**
     * @return mixed
     */
    public function getIsBanned()
    {
        return $this->IsBanned;
    }

    /**
     * @param mixed $IsBanned
     */
    public function setIsBanned($IsBanned)
    {
        $this->IsBanned = $IsBanned;
    }

    /**
     * @return mixed
     */
    public function getIsBeta()
    {
        return $this->IsBeta;
    }

    /**
     * @param mixed $IsBeta
     */
    public function setIsBeta($IsBeta)
    {
        $this->IsBeta = $IsBeta;
    }

    /**
     * @return mixed
     */
    public function getIsCashAllowed()
    {
        return $this->IsCashAllowed;
    }

    /**
     * @param mixed $IsCashAllowed
     */
    public function setIsCashAllowed($IsCashAllowed)
    {
        $this->IsCashAllowed = $IsCashAllowed;
    }

    /**
     * @return mixed
     */
    public function getIsCompleted()
    {
        return $this->IsCompleted;
    }

    /**
     * @param mixed $IsCompleted
     */
    public function setIsCompleted($IsCompleted)
    {
        $this->IsCompleted = $IsCompleted;
    }

    /**
     * @return mixed
     */
    public function getIsProfileCompleted()
    {
        return $this->IsProfileCompleted;
    }

    /**
     * @param mixed $IsProfileCompleted
     */
    public function setIsProfileCompleted($IsProfileCompleted)
    {
        $this->IsProfileCompleted = $IsProfileCompleted;
    }

    /**
     * @return mixed
     */
    public function getIsRulesAccepted()
    {
        return $this->IsRulesAccepted;
    }

    /**
     * @param mixed $IsRulesAccepted
     */
    public function setIsRulesAccepted($IsRulesAccepted)
    {
        $this->IsRulesAccepted = $IsRulesAccepted;
    }

    /**
     * @return mixed
     */
    public function getIsTemporaryBlocked()
    {
        return $this->IsTemporaryBlocked;
    }

    /**
     * @param mixed $IsTemporaryBlocked
     */
    public function setIsTemporaryBlocked($IsTemporaryBlocked)
    {
        $this->IsTemporaryBlocked = $IsTemporaryBlocked;
    }

    /**
     * @return mixed
     */
    public function getLastIp()
    {
        return $this->LastIp;
    }

    /**
     * @param mixed $LastIp
     */
    public function setLastIp($LastIp)
    {
        $this->LastIp = $LastIp;
    }

    /**
     * @return mixed
     */
    public function getLastLoginAt()
    {
        return $this->LastLoginAt;
    }

    /**
     * @param mixed $LastLoginAt
     */
    public function setLastLoginAt($LastLoginAt)
    {
        $this->LastLoginAt = $LastLoginAt;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->Locale;
    }

    /**
     * @param mixed $Locale
     */
    public function setLocale($Locale)
    {
        $this->Locale = $Locale;
    }

    /**
     * @return mixed
     */
    public function getMaxAllowedAPIKeys()
    {
        return $this->MaxAllowedAPIKeys;
    }

    /**
     * @param mixed $MaxAllowedAPIKeys
     */
    public function setMaxAllowedAPIKeys($MaxAllowedAPIKeys)
    {
        $this->MaxAllowedAPIKeys = $MaxAllowedAPIKeys;
    }

    /**
     * @return mixed
     */
    public function getModifiedAt()
    {
        return $this->ModifiedAt;
    }

    /**
     * @param mixed $ModifiedAt
     */
    public function setModifiedAt($ModifiedAt)
    {
        $this->ModifiedAt = $ModifiedAt;
    }

    /**
     * @return mixed
     */
    public function getNewEmail()
    {
        return $this->NewEmail;
    }

    /**
     * @param mixed $NewEmail
     */
    public function setNewEmail($NewEmail)
    {
        $this->NewEmail = $NewEmail;
    }

    /**
     * @return mixed
     */
    public function getNewPasswordRequestedAt()
    {
        return $this->NewPasswordRequestedAt;
    }

    /**
     * @param mixed $NewPasswordRequestedAt
     */
    public function setNewPasswordRequestedAt($NewPasswordRequestedAt)
    {
        $this->NewPasswordRequestedAt = $NewPasswordRequestedAt;
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
    public function getUMPScoreLast()
    {
        return $this->UMPScoreLast;
    }

    /**
     * @param mixed $UMPScoreLast
     */
    public function setUMPScoreLast($UMPScoreLast)
    {
        $this->UMPScoreLast = $UMPScoreLast;
    }

    /**
     * @return mixed
     */
    public function getUMPScoreOrig()
    {
        return $this->UMPScoreOrig;
    }

    /**
     * @param mixed $UMPScoreOrig
     */
    public function setUMPScoreOrig($UMPScoreOrig)
    {
        $this->UMPScoreOrig = $UMPScoreOrig;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param mixed $Username
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
    }

    /**
     * @return mixed
     */
    public function getWarnedRatelimitAt()
    {
        return $this->WarnedRatelimitAt;
    }

    /**
     * @param mixed $WarnedRatelimitAt
     */
    public function setWarnedRatelimitAt($WarnedRatelimitAt)
    {
        $this->WarnedRatelimitAt = $WarnedRatelimitAt;
    }
}
