<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Messagestatistics Model
 *
 * API key Campaign/Message statistics
 */
class Messagestatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'messagestatistics';
    }

    /**
     * Average delay (in seconds) between the open and click.
     * @Type("float")
     * @SerializedName("AverageClickDelay")
     */
    protected $AverageClickDelay = null;

    /**
     * Average number of times a click was registered for a message.
     * @Type("float")
     * @SerializedName("AverageClickedCount")
     */
    protected $AverageClickedCount = null;

    /**
     * Average delay between message delivery and first message open.
     * @Type("float")
     * @SerializedName("AverageOpenDelay")
     */
    protected $AverageOpenDelay = null;

    /**
     * Average number of times a recipient opens the message.
     * @Type("float")
     * @SerializedName("AverageOpenedCount")
     */
    protected $AverageOpenedCount = null;

    /**
     * Number of blocked messages.
     * @Type("integer")
     * @SerializedName("BlockedCount")
     */
    protected $BlockedCount = null;

    /**
     * Number of bounced messages.
     * @Type("integer")
     * @SerializedName("BouncedCount")
     */
    protected $BouncedCount = null;

    /**
     * Number of distinct campaigns
     * @Type("integer")
     * @SerializedName("CampaignCount")
     */
    protected $CampaignCount = null;

    /**
     * Number of registered clicks.
     * @Type("integer")
     * @SerializedName("ClickedCount")
     */
    protected $ClickedCount = null;

    /**
     * Number of messages delivered to their destination.
     * @Type("integer")
     * @SerializedName("DeliveredCount")
     */
    protected $DeliveredCount = null;

    /**
     * Number of message open registrations.
     * @Type("integer")
     * @SerializedName("OpenedCount")
     */
    protected $OpenedCount = null;

    /**
     * Total number of messages processed by Mailjet
     * @Type("integer")
     * @SerializedName("ProcessedCount")
     */
    protected $ProcessedCount = null;

    /**
     * Number of messages waiting in send queue
     * @Type("integer")
     * @SerializedName("QueuedCount")
     */
    protected $QueuedCount = null;

    /**
     * Number of spam complaints
     * @Type("integer")
     * @SerializedName("SpamComplaintCount")
     */
    protected $SpamComplaintCount = null;

    /**
     * Number of transactional mails.
     * @Type("integer")
     * @SerializedName("TransactionalCount")
     */
    protected $TransactionalCount = null;

    /**
     * Number of registered unsubscribe requests.
     * @Type("integer")
     * @SerializedName("UnsubscribedCount")
     */
    protected $UnsubscribedCount = null;

    /**
     * @return mixed
     */
    public function getAverageClickDelay()
    {
        return $this->AverageClickDelay;
    }

    /**
     * @param mixed $AverageClickDelay
     */
    public function setAverageClickDelay($AverageClickDelay)
    {
        $this->AverageClickDelay = $AverageClickDelay;
    }

    /**
     * @return mixed
     */
    public function getAverageClickedCount()
    {
        return $this->AverageClickedCount;
    }

    /**
     * @param mixed $AverageClickedCount
     */
    public function setAverageClickedCount($AverageClickedCount)
    {
        $this->AverageClickedCount = $AverageClickedCount;
    }

    /**
     * @return mixed
     */
    public function getAverageOpenDelay()
    {
        return $this->AverageOpenDelay;
    }

    /**
     * @param mixed $AverageOpenDelay
     */
    public function setAverageOpenDelay($AverageOpenDelay)
    {
        $this->AverageOpenDelay = $AverageOpenDelay;
    }

    /**
     * @return mixed
     */
    public function getAverageOpenedCount()
    {
        return $this->AverageOpenedCount;
    }

    /**
     * @param mixed $AverageOpenedCount
     */
    public function setAverageOpenedCount($AverageOpenedCount)
    {
        $this->AverageOpenedCount = $AverageOpenedCount;
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
    public function getCampaignCount()
    {
        return $this->CampaignCount;
    }

    /**
     * @param mixed $CampaignCount
     */
    public function setCampaignCount($CampaignCount)
    {
        $this->CampaignCount = $CampaignCount;
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
    public function getTransactionalCount()
    {
        return $this->TransactionalCount;
    }

    /**
     * @param mixed $TransactionalCount
     */
    public function setTransactionalCount($TransactionalCount)
    {
        $this->TransactionalCount = $TransactionalCount;
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
