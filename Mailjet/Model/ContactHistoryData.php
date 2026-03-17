<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


class ContactHistoryData extends AbstractModel
{
    public static function getResource()
    {
        return 'contacthistorydata';
    }

    /**
     * ID reference to Contact
     */
    #[SerializedName('ContactID')]
    protected $ContactID = null;

    /**
     * Value of the Email field of the related Contact resource
     */
    #[SerializedName('ContactALT')]
    protected $ContactALT = null;

    /**
     * The data as a string.
     */
    #[SerializedName('Data')]
    protected $Data = null;

    /**
     * Name of the history data item.
     */
    #[SerializedName('Name')]
    protected $Name = null;

    /**
     * @return mixed
     */
    public function getContactID()
    {
        return $this->ContactID;
    }

    /**
     * @param mixed $ContactID
     */
    public function setContactID($ContactID)
    {
        $this->ContactID = $ContactID;
    }

    /**
     * @return mixed
     */
    public function getContactALT()
    {
        return $this->ContactALT;
    }

    /**
     * @param mixed $ContactALT
     */
    public function setContactALT($ContactALT)
    {
        $this->ContactALT = $ContactALT;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param mixed $Data
     */
    public function setData($Data)
    {
        $this->Data = $Data;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }
}
