<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Messageclientstatistics Model
 *
 * Per API Key User agent statistics for user agents
 */
class Messageclientstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'messageclientstatistics';
    }

    /**
     * Number of times this useragent was used.
     */
    protected $Count = null;

    /**
     * Domain from which useragent was used
     */
    protected $Domain = null;

    /**
     * Unique numerical ID for this object
     */
    protected $ID = null;

    /**
     * Reference to user agent
     */
    protected $UserAgent = null;

    /**
     * Sets the Number of times this useragent was used.
     *
     * @param int
     * @return Messageclientstatistics
     */
    public function setCount($Count = null)
    {
        $this->Count = $Count;
        return $this;
    }

    /**
     * Gets the Number of times this useragent was used.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * Sets the Domain from which useragent was used
     *
     * @param string
     * @return Messageclientstatistics
     */
    public function setDomain($Domain)
    {
        $this->Domain = $Domain;
        return $this;
    }

    /**
     * Gets the Domain from which useragent was used
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     * Sets the Unique numerical ID for this object
     *
     * @param int
     * @return Messageclientstatistics
     */
    public function setID($ID = null)
    {
        $this->ID = $ID;
        return $this;
    }

    /**
     * Gets the Unique numerical ID for this object
     *
     * @return int
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Sets the Reference to user agent
     *
     * @param int
     * @return Messageclientstatistics
     */
    public function setUserAgent($UserAgent)
    {
        $this->UserAgent = $UserAgent;
        return $this;
    }

    /**
     * Gets the Reference to user agent
     *
     * @return int
     */
    public function getUserAgent()
    {
        return $this->UserAgent;
    }


}

