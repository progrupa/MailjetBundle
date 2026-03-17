<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Contact Model
 *
 * API Key contacts (email addresses)
 */
class Contact extends AbstractModel
{
    public static function getResource()
    {
        return 'contact';
    }

    /**
     * Number of messages delivered to this contact.
     */
    #[SerializedName('DeliveredCount')]
    protected $DeliveredCount = null;

    /**
     * Email address of this contact
     */
    #[SerializedName('Email')]
    protected $Email = null;

    /**
     * Is an opt-in for a contactslist subscription pending ?
     */
    #[SerializedName('IsOptInPending')]
    protected $IsOptInPending = false;

    /**
     * Is this contact complaining of spam ?
     */
    #[SerializedName('IsSpamComplaining')]
    protected $IsSpamComplaining = false;

    /**
     * Timestamp of last registered activity for this contact
     */
    #[SerializedName('LastActivityAt')]
    protected $LastActivityAt = null;

    /**
     * Timestamp of last update of this contact
     */
    #[SerializedName('LastUpdateAt')]
    protected $LastUpdateAt = null;

    /**
     * User-provided name for this contact
     */
    #[SerializedName('Name')]
    protected $Name = null;

    /**
     * Timestamp of last unsubscribe request.
     */
    #[SerializedName('UnsubscribedAt')]
    protected $UnsubscribedAt = null;

    /**
     * Description of who initiated the unsubscribe request.
     */
    #[SerializedName('UnsubscribedBy')]
    protected $UnsubscribedBy = null;

    /**
     * @return mixed
     */
    public function getDeliveredCount()
    {
        return $this->DeliveredCount;
    }

    /**
     * @param mixed $DeliveredCount
     */
    public function setDeliveredCount($DeliveredCount)
    {
        $this->DeliveredCount = $DeliveredCount;
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
    public function getIsOptInPending()
    {
        return $this->IsOptInPending;
    }

    /**
     * @param mixed $IsOptInPending
     */
    public function setIsOptInPending($IsOptInPending)
    {
        $this->IsOptInPending = $IsOptInPending;
    }

    /**
     * @return mixed
     */
    public function getIsSpamComplaining()
    {
        return $this->IsSpamComplaining;
    }

    /**
     * @param mixed $IsSpamComplaining
     */
    public function setIsSpamComplaining($IsSpamComplaining)
    {
        $this->IsSpamComplaining = $IsSpamComplaining;
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
    public function getLastUpdateAt()
    {
        return $this->LastUpdateAt;
    }

    /**
     * @param mixed $LastUpdateAt
     */
    public function setLastUpdateAt($LastUpdateAt)
    {
        $this->LastUpdateAt = $LastUpdateAt;
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
    public function getUnsubscribedAt()
    {
        return $this->UnsubscribedAt;
    }

    /**
     * @param mixed $UnsubscribedAt
     */
    public function setUnsubscribedAt($UnsubscribedAt)
    {
        $this->UnsubscribedAt = $UnsubscribedAt;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribedBy()
    {
        return $this->UnsubscribedBy;
    }

    /**
     * @param mixed $UnsubscribedBy
     */
    public function setUnsubscribedBy($UnsubscribedBy)
    {
        $this->UnsubscribedBy = $UnsubscribedBy;
    }
}

