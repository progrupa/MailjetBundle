<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Useragentstatistics Model
 *
 * API Key message Open/Click statistical data grouped per user agent (browser)
 */
class Useragentstatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'useragentstatistics';
    }

    /**
     * Number of clicks using this browser
     * @Type("integer")
     * @SerializedName("Count")
     */
    protected $Count = null;

    /**
     * User of messages clicked using this browser
     * @Type("integer")
     * @SerializedName("DistinctCount")
     */
    protected $DistinctCount = null;

    /**
     * Platform on which the browser runs.
     * @Type("string")
     * @SerializedName("Platform")
     */
    protected $Platform = null;

    /**
     * Description of user agent
     * @Type("string")
     * @SerializedName("UserAgent")
     */
    protected $UserAgent = null;

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param mixed $Count
     */
    public function setCount($Count)
    {
        $this->Count = $Count;
    }

    /**
     * @return mixed
     */
    public function getDistinctCount()
    {
        return $this->DistinctCount;
    }

    /**
     * @param mixed $DistinctCount
     */
    public function setDistinctCount($DistinctCount)
    {
        $this->DistinctCount = $DistinctCount;
    }

    /**
     * @return mixed
     */
    public function getPlatform()
    {
        return $this->Platform;
    }

    /**
     * @param mixed $Platform
     */
    public function setPlatform($Platform)
    {
        $this->Platform = $Platform;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->UserAgent;
    }

    /**
     * @param mixed $UserAgent
     */
    public function setUserAgent($UserAgent)
    {
        $this->UserAgent = $UserAgent;
    }
}
