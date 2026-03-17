<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Liststatistics Model
 *
 * API Key campaign/message/click statistics grouped by contacts list.
 */
class Liststatistics extends AbstractModel
{
    public static function getResource()
    {
        return 'liststatistics';
    }

    /**
     * Number of active list members
     */
    #[SerializedName('ActiveCount')]
    protected $ActiveCount = null;

    /**
     * Number of registered unsubscribe requests. (only calculated when CalcActiveUnsub filter is active)
     */
    #[SerializedName('ActiveUnsubscribedCount')]
    protected $ActiveUnsubscribedCount = null;

    /**
     * List address
     */
    #[SerializedName('Address')]
    protected $Address = null;

    /**
     * Number of blocked messages.
     */
    #[SerializedName('BlockedCount')]
    protected $BlockedCount = null;

    /**
     * Number of bounced messages.
     */
    #[SerializedName('BouncedCount')]
    protected $BouncedCount = null;

    /**
     * Number of registered clicks.
     */
    #[SerializedName('ClickedCount')]
    protected $ClickedCount = null;

    /**
     * Number of messages delivered to their destination.
     */
    #[SerializedName('DeliveredCount')]
    protected $DeliveredCount = null;

    /**
     * Is the list Deleted or not ?
     */
    #[SerializedName('IsDeleted')]
    protected $IsDeleted = false;

    /**
     * Timestamp of last registered activity for this contactlist
     */
    #[SerializedName('LastActivityAt')]
    protected $LastActivityAt = null;

    /**
     * List name
     */
    #[SerializedName('Name')]
    protected $Name = null;

    /**
     * Number of message open registrations.
     */
    #[SerializedName('OpenedCount')]
    protected $OpenedCount = null;

    /**
     * Number of spam complaints
     */
    #[SerializedName('SpamComplaintCount')]
    protected $SpamComplaintCount = null;

    /**
     * Number of subscribers
     */
    #[SerializedName('SubscriberCount')]
    protected $SubscriberCount = null;

    /**
     * Number of registered unsubscribe requests.
     */
    #[SerializedName('UnsubscribedCount')]
    protected $UnsubscribedCount = null;

    /**
     * @return mixed
     */
    public function getActiveCount()
    {
        return $this->ActiveCount;
    }

    /**
     * @param mixed $ActiveCount
     */
    public function setActiveCount($ActiveCount)
    {
        $this->ActiveCount = $ActiveCount;
    }

    /**
     * @return mixed
     */
    public function getActiveUnsubscribedCount()
    {
        return $this->ActiveUnsubscribedCount;
    }

    /**
     * @param mixed $ActiveUnsubscribedCount
     */
    public function setActiveUnsubscribedCount($ActiveUnsubscribedCount)
    {
        $this->ActiveUnsubscribedCount = $ActiveUnsubscribedCount;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getBlockedCount()
    {
        return $this->BlockedCount;
    }

    /**
     * @param mixed $BlockedCount
     */
    public function setBlockedCount($BlockedCount)
    {
        $this->BlockedCount = $BlockedCount;
    }

    /**
     * @return mixed
     */
    public function getBouncedCount()
    {
        return $this->BouncedCount;
    }

    /**
     * @param mixed $BouncedCount
     */
    public function setBouncedCount($BouncedCount)
    {
        $this->BouncedCount = $BouncedCount;
    }

    /**
     * @return mixed
     */
    public function getClickedCount()
    {
        return $this->ClickedCount;
    }

    /**
     * @param mixed $ClickedCount
     */
    public function setClickedCount($ClickedCount)
    {
        $this->ClickedCount = $ClickedCount;
    }

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
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param mixed $IsDeleted
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
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
    public function getOpenedCount()
    {
        return $this->OpenedCount;
    }

    /**
     * @param mixed $OpenedCount
     */
    public function setOpenedCount($OpenedCount)
    {
        $this->OpenedCount = $OpenedCount;
    }

    /**
     * @return mixed
     */
    public function getSpamComplaintCount()
    {
        return $this->SpamComplaintCount;
    }

    /**
     * @param mixed $SpamComplaintCount
     */
    public function setSpamComplaintCount($SpamComplaintCount)
    {
        $this->SpamComplaintCount = $SpamComplaintCount;
    }

    /**
     * @return mixed
     */
    public function getSubscriberCount()
    {
        return $this->SubscriberCount;
    }

    /**
     * @param mixed $SubscriberCount
     */
    public function setSubscriberCount($SubscriberCount)
    {
        $this->SubscriberCount = $SubscriberCount;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribedCount()
    {
        return $this->UnsubscribedCount;
    }

    /**
     * @param mixed $UnsubscribedCount
     */
    public function setUnsubscribedCount($UnsubscribedCount)
    {
        $this->UnsubscribedCount = $UnsubscribedCount;
    }

}
