<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Graphstatistics Model
 *
 * API Campaign/message/click statistics grouped over intervals.
 */
class Graphstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'graphstatistics';
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
     * Reference time in textual form.
     * @SerializedName("RefTimestamp")
     */
    protected $RefTimestamp = null;

    /**
     * Minimum timestamp in the requested period.
     * @SerializedName("SendtimeStart")
     */
    protected $SendtimeStart = null;

    /**
     * Number of spam complaints
     * @SerializedName("SpamcomplaintCount")
     */
    protected $SpamcomplaintCount = null;

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
    public function getRefTimestamp()
    {
        return $this->RefTimestamp;
    }

    /**
     * @param mixed $RefTimestamp
     */
    public function setRefTimestamp($RefTimestamp)
    {
        $this->RefTimestamp = $RefTimestamp;
    }

    /**
     * @return mixed
     */
    public function getSendtimeStart()
    {
        return $this->SendtimeStart;
    }

    /**
     * @param mixed $SendtimeStart
     */
    public function setSendtimeStart($SendtimeStart)
    {
        $this->SendtimeStart = $SendtimeStart;
    }

    /**
     * @return mixed
     */
    public function getSpamcomplaintCount()
    {
        return $this->SpamcomplaintCount;
    }

    /**
     * @param mixed $SpamcomplaintCount
     */
    public function setSpamcomplaintCount($SpamcomplaintCount)
    {
        $this->SpamcomplaintCount = $SpamcomplaintCount;
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
