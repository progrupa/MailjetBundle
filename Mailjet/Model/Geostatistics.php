<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Geostatistics Model
 *
 * API Key click statistics grouped per country.
 */
class Geostatistics implements ModelInterface
{
    public static function getResource()
    {
        return 'geostatistics';
    }

    /**
     * Number of registered clicks.
     */
    #[SerializedName('ClickedCount')]
    protected $ClickedCount = null;

    /**
     * Country
     */
    #[SerializedName('Country')]
    protected $Country = null;

    /**
     * Number of message open registrations.
     */
    #[SerializedName('OpenedCount')]
    protected $OpenedCount = null;

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
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param mixed $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
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
}
