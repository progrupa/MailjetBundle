<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Domainstatistics Model
 *
 * API key Campaign/Message/click statistics grouped per domain.
 */
class Domainstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'domainstatistics';
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
     * Number of messages delivered to their destination.
     */
    #[SerializedName('DeliveredCount')]
    protected $DeliveredCount = null;

    /**
     * Domain name (lowercase)
     */
    #[SerializedName('Domain')]
    protected $Domain = null;

    /**
     * Unique numerical ID for this object
     */
    #[SerializedName('ID')]
    protected $ID = null;

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
     * Number of registered unsubscribe requests.
     */
    #[SerializedName('UnsubscribedCount')]
    protected $UnsubscribedCount = null;

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
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * @param mixed $Domain
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;
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
