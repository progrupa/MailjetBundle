<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Contactslistsignup Model
 *
 * Contacts list signup request
 */
class Contactslistsignup implements ModelInterface
{
    public static function getResource()
    {
        return 'contactslistsignup';
    }

    /**
     * Timestamp when signup confirmation was registered.
     * @Type("integer")
     * @SerializedName("ConfirmAt")
     */
    protected $ConfirmAt = null;

    /**
     * IP address detected during signup confirmation.
     * @Type("string")
     * @SerializedName("ConfirmIp")
     */
    protected $ConfirmIp = null;

    /**
     * Reference to Contact to be signed up.
     * @Type("integer")
     * @SerializedName("ContactID")
     */
    protected $ContactID = null;

    /**
     * Value of the Email field of the related Contact resource
     * @Type("string")
     * @SerializedName("ContactALT")
     */
    protected $ContactALT = null;

    /**
     * Email address to be signed up.
     * @Type("string")
     * @SerializedName("Email")
     */
    protected $Email = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Contact list to which contact will be subscribed.
     * @Type("integer")
     * @SerializedName("ListID")
     */
    protected $ListID = null;

    /**
     * Value of the Address field of the related ContactsList resource
     * @Type("string")
     * @SerializedName("ListALT")
     */
    protected $ListALT = null;

    /**
     * Reference to recipient to which contact corresponds.
     * @Type("integer")
     * @SerializedName("Recipient")
     */
    protected $Recipient = null;

    /**
     * Timestamp of sign up registration.
     * @Type("integer")
     * @SerializedName("SignupAt")
     */
    protected $SignupAt = null;

    /**
     * IP address detected during signup registration.
     * @Type("string")
     * @SerializedName("SignupIp")
     */
    protected $SignupIp = null;

    /**
     * Unique confirmation key needed for confirmation.
     * @Type("string")
     * @SerializedName("SignupKey")
     */
    protected $SignupKey = null;

    /**
     * Where did the signup request come from.
     * @Type("string")
     * @SerializedName("Source")
     */
    protected $Source = null;

    /**
     * ID of signup request entity (usually widget ID).
     * @Type("integer")
     * @SerializedName("SourceId")
     */
    protected $SourceId = null;

    /**
     * @return mixed
     */
    public function getConfirmAt()
    {
        return $this->ConfirmAt;
    }

    /**
     * @param mixed $ConfirmAt
     */
    public function setConfirmAt($ConfirmAt)
    {
        $this->ConfirmAt = $ConfirmAt;
    }

    /**
     * @return mixed
     */
    public function getConfirmIp()
    {
        return $this->ConfirmIp;
    }

    /**
     * @param mixed $ConfirmIp
     */
    public function setConfirmIp($ConfirmIp)
    {
        $this->ConfirmIp = $ConfirmIp;
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
    public function getListID()
    {
        return $this->ListID;
    }

    /**
     * @param mixed $ListID
     */
    public function setListID($ListID)
    {
        $this->ListID = $ListID;
    }

    /**
     * @return mixed
     */
    public function getListALT()
    {
        return $this->ListALT;
    }

    /**
     * @param mixed $ListALT
     */
    public function setListALT($ListALT)
    {
        $this->ListALT = $ListALT;
    }

    /**
     * @return mixed
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * @param mixed $Recipient
     */
    public function setRecipient($Recipient)
    {
        $this->Recipient = $Recipient;
    }

    /**
     * @return mixed
     */
    public function getSignupAt()
    {
        return $this->SignupAt;
    }

    /**
     * @param mixed $SignupAt
     */
    public function setSignupAt($SignupAt)
    {
        $this->SignupAt = $SignupAt;
    }

    /**
     * @return mixed
     */
    public function getSignupIp()
    {
        return $this->SignupIp;
    }

    /**
     * @param mixed $SignupIp
     */
    public function setSignupIp($SignupIp)
    {
        $this->SignupIp = $SignupIp;
    }

    /**
     * @return mixed
     */
    public function getSignupKey()
    {
        return $this->SignupKey;
    }

    /**
     * @param mixed $SignupKey
     */
    public function setSignupKey($SignupKey)
    {
        $this->SignupKey = $SignupKey;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param mixed $Source
     */
    public function setSource($Source)
    {
        $this->Source = $Source;
    }

    /**
     * @return mixed
     */
    public function getSourceId()
    {
        return $this->SourceId;
    }

    /**
     * @param mixed $SourceId
     */
    public function setSourceId($SourceId)
    {
        $this->SourceId = $SourceId;
    }
}
