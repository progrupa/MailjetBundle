<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Apikeytotals Model
 *
 * Global counts for a API Key (not temporal)
 */
class Apikeytotals implements ModelInterface
{
    public static function getResource()
    {
        return 'apikeytotals';
    }

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
     * Timestamp of last registered activity for this API key.
     * @Type("integer")
     * @SerializedName("LastActivity")
     */
    protected $LastActivity = null;

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
     * @SerializedName("SpamcomplaintCount")
     */
    protected $SpamcomplaintCount = null;

    /**
     * Number of registered unsubscribe requests.
     * @Type("integer")
     * @SerializedName("UnsubscribedCount")
     */
    protected $UnsubscribedCount = null;
}
