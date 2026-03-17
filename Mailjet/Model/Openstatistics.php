<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Openstatistics Model
 *
 * API Key Statistical message open information
 */
class Openstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'openstatistics';
    }

    /**
     * Number of message open registrations.
     */
    #[SerializedName('OpenedCount')]
    protected $OpenedCount = null;

    /**
     * Delay between delivery and open (in seconds)
     */
    #[SerializedName('OpenedDelay')]
    protected $OpenedDelay = null;

    /**
     * Total number of messages processed by Mailjet
     */
    #[SerializedName('ProcessedCount')]
    protected $ProcessedCount = null;

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
    public function getOpenedDelay()
    {
        return $this->OpenedDelay;
    }

    /**
     * @param mixed $OpenedDelay
     */
    public function setOpenedDelay($OpenedDelay)
    {
        $this->OpenedDelay = $OpenedDelay;
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
}

