<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


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
     * Timestamp of last registered activity for this API key.
     */
    #[SerializedName('LastActivity')]
    protected $LastActivity = null;

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
    #[SerializedName('SpamcomplaintCount')]
    protected $SpamcomplaintCount = null;

    /**
     * Number of registered unsubscribe requests.
     */
    #[SerializedName('UnsubscribedCount')]
    protected $UnsubscribedCount = null;
}
