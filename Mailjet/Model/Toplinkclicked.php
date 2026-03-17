<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * Toplinkclicked Model
 *
 * Top links clicked historgram
 */
class Toplinkclicked implements ModelInterface
{
    public static function getResource()
    {
        return 'toplinkclicked';
    }

    /**
     * Number of registered clicks.
     */
    #[SerializedName('ClickedCount')]
    protected $ClickedCount = null;

    /**
     * Unique numerical ID for this object
     */
    #[SerializedName('ID')]
    protected $ID = null;

    /**
     * Unique ID for the link.
     */
    #[SerializedName('LinkId')]
    protected $LinkId = null;

    /**
     * Actual link clicked
     */
    #[SerializedName('Url')]
    protected $Url = null;

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
    public function getLinkId()
    {
        return $this->LinkId;
    }

    /**
     * @param mixed $LinkId
     */
    public function setLinkId($LinkId)
    {
        $this->LinkId = $LinkId;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param mixed $Url
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
    }
}
