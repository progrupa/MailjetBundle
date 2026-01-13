<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Senderstatistics Model
 *
 * API Key sender email address message/open/click statistical information
 */
class Senderstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'senderstatistics';
    }

    /**
     * Number of blocked messages.
     * @SerializedName("BlockedCount")
     */
    protected $BlockedCount = null;

    /**
     * Number of bounced messages.
     * @SerializedName("BouncedCount")
     */
    protected $BouncedCount = null;

    /**
     * Number of registered clicks.
     * @SerializedName("ClickedCount")
     */
    protected $ClickedCount = null;

    /**
     * Number of messages delivered to their destination.
     * @SerializedName("DeliveredCount")
     */
    protected $DeliveredCount = null;

    /**
     * Timestamp of last registered activity for this sender
     * @SerializedName("LastActivityAt")
     */
    protected $LastActivityAt = null;

    /**
     * Number of message open registrations.
     * @SerializedName("OpenedCount")
     */
    protected $OpenedCount = null;

    /**
     * Total number of messages processed by Mailjet
     * @SerializedName("ProcessedCount")
     */
    protected $ProcessedCount = null;

    /**
     * Number of messages waiting in send queue
     * @SerializedName("QueuedCount")
     */
    protected $QueuedCount = null;

    /**
     * Reference to the sender for which the statistics are collected.
     * @SerializedName("SenderID")
     */
    protected $SenderID = null;

    /**
     * Reference to the sender for which the statistics are collected.
     * @SerializedName("SenderALT")
     */
    protected $SenderALT = null;

    /**
     * Number of spam complaints
     * @SerializedName("SpamComplaintCount")
     */
    protected $SpamComplaintCount = null;

    /**
     * Number of registered unsubscribe requests.
     * @SerializedName("UnsubscribedCount")
     */
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
    public function getSenderID()
    {
        return $this->SenderID;
    }

    /**
     * @param mixed $SenderID
     */
    public function setSenderID($SenderID)
    {
        $this->SenderID = $SenderID;
    }

    /**
     * @return mixed
     */
    public function getSenderALT()
    {
        return $this->SenderALT;
    }

    /**
     * @param mixed $SenderALT
     */
    public function setSenderALT($SenderALT)
    {
        $this->SenderALT = $SenderALT;
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
