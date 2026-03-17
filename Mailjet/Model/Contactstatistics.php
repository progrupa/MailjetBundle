<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Contactstatistics Model
 *
 * Message/Click Statistics for a contact
 */
class Contactstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'contactstatistics';
    }

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
     * The contact for which statistics are shown.
     */
    #[SerializedName('ContactID')]
    protected $ContactID = null;

    /**
     * Value of the Email field of the related Contact resource
     */
    #[SerializedName('ContactALT')]
    protected $ContactALT = null;

    /**
     * Number of messages delivered to their destination.
     */
    #[SerializedName('DeliveredCount')]
    protected $DeliveredCount = null;

    /**
     * Timestamp of last registered activity for this contact
     */
    #[SerializedName('LastActivityAt')]
    protected $LastActivityAt = null;

    /**
     * Number of message open registrations.
     */
    #[SerializedName('OpenedCount')]
    protected $OpenedCount = null;

    /**
     * Total number of messages processed by Mailjet
     */
    #[SerializedName('ProcessedCount')]
    protected $ProcessedCount = null;

    /**
     * Number of messages waiting in send queue
     */
    #[SerializedName('QueuedCount')]
    protected $QueuedCount = null;

    /**
     * Number of spam complaints
     */
    #[SerializedName('SpamComplaintCount')]
    protected $SpamComplaintCount = null;

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
    public function getProcessedCount()
    {
        return $this->ProcessedCount;
    }

    /**
     * @param mixed $ProcessedCount
     */
    public function setProcessedCount($ProcessedCount)
    {
        $this->ProcessedCount = $ProcessedCount;
    }

    /**
     * @return mixed
     */
    public function getQueuedCount()
    {
        return $this->QueuedCount;
    }

    /**
     * @param mixed $QueuedCount
     */
    public function setQueuedCount($QueuedCount)
    {
        $this->QueuedCount = $QueuedCount;
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
}
