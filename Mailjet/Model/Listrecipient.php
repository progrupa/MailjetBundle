<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Listrecipient Model
 *
 * Member of a contacts list (link between contact and contactslist)
 */
class Listrecipient extends AbstractModel
{
    public static function getResource()
    {
        return 'listrecipient';
    }

    /**
     * Reference to contact which is suscribed to the contactslist.
     * @Type("integer")
     * @SerializedName("ContactID")
     */
    protected $ContactID = null;

    /**
     * Reference to contact which is suscribed to the contactslist.
     * @Type("string")
     * @SerializedName("ContactALT")
     */
    protected $ContactALT = null;

    /**
     * Is this subscription active
     * @Type("boolean")
     * @SerializedName("IsActive")
     */
    protected $IsActive = false;

    /**
     * Has the contact been unsubscribed from the list ?
     * @Type("boolean")
     * @SerializedName("IsUnsubscribed")
     */
    protected $IsUnsubscribed = false;

    /**
     * Contacts list to which contact is subscribed
     * @Type("integer")
     * @SerializedName("ListID")
     */
    protected $ListID = null;

    /**
     * Contacts list to which contact is subscribed
     * @Type("string")
     * @SerializedName("ListALT")
     */
    protected $ListALT = null;

    /**
     * Timestamp when unsubscription was registered.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("UnsubscribedAt")
     */
    protected $UnsubscribedAt = null;

    /**
     * Sets the Reference to contact which is suscribed to the contactslist.
     *
     * @param int
     * @return Listrecipient
     */
    public function setContactID($ContactID)
    {
        $this->ContactID = $ContactID;
        return $this;
    }

    /**
     * Gets the Reference to contact which is suscribed to the contactslist.
     *
     * @return int
     */
    public function getContactID()
    {
        return $this->ContactID;
    }

    /**
     * Sets the Unique numerical ID for this object
     *
     * @param int
     * @return Listrecipient
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the Unique numerical ID for this object
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the Is this subscription active
     *
     * @param bool
     * @return Listrecipient
     */
    public function setIsActive($IsActive = null)
    {
        $this->IsActive = $IsActive;
        return $this;
    }

    /**
     * Gets the Is this subscription active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Sets the Has the contact been unsubscribed from the list ?
     *
     * @param bool
     * @return Listrecipient
     */
    public function setIsUnsubscribed($IsUnsubscribed = null)
    {
        $this->IsUnsubscribed = $IsUnsubscribed;
        return $this;
    }

    /**
     * Gets the Has the contact been unsubscribed from the list ?
     *
     * @return bool
     */
    public function getIsUnsubscribed()
    {
        return $this->IsUnsubscribed;
    }

    /**
     * Sets the Contacts list to which contact is subscribed
     *
     * @param int
     * @return Listrecipient
     */
    public function setListID($ListID)
    {
        $this->ListID = $ListID;
        return $this;
    }

    /**
     * Gets the Contacts list to which contact is subscribed
     *
     * @return int
     */
    public function getListID()
    {
        return $this->ListID;
    }

    /**
     * Sets the Timestamp when unsubscription was registered.
     *
     * @param \Datetime
     * @return Listrecipient
     */
    public function setUnsubscribedAt(\Datetime $UnsubscribedAt = null)
    {
        $this->UnsubscribedAt = $UnsubscribedAt;
        return $this;
    }

    /**
     * Gets the Timestamp when unsubscription was registered.
     *
     * @return \Datetime
     */
    public function getUnsubscribedAt()
    {
        return $this->UnsubscribedAt;
    }


}

