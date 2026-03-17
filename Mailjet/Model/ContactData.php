<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


class ContactData implements ModelInterface
{
    public static function getResource()
    {
        return 'contactdata';
    }

    /**
     * Access rights of this token, in serialized PHP.
     */
    #[SerializedName('ContactID')]
    protected $ContactID = null;

    /**
     * Access rights of this token, in serialized PHP.
     */
    #[SerializedName('Data')]
    protected $Data = null;

    /**
     * Access rights of this token, in serialized PHP.
     */
    #[SerializedName('ID')]
    protected $ID = null;

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
}
