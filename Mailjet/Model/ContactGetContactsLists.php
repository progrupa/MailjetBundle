<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContactGetContactsLists implements ChildModelInterface
{
    public static function getResource()
    {
        return 'contact/{id}/getcontactslists';
    }

    /**
     * Is the contact active
     * @Type("boolean")
     * @SerializedName("IsActive")
     */
    protected $IsActive = false;

    /**
     * Has this contact unsubscribed from the list
     * @Type("boolean")
     * @SerializedName("IsUnsub")
     */
    protected $IsUnsub = false;

    /**
     * ID of the contact list
     * @Type("integer")
     * @SerializedName("ListID")
     */
    protected $ListID = false;

    /**
     * Alternative identification of the contact list
     * @Type("string")
     * @SerializedName("ListALT")
     */
    protected $ListALT = false;

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param mixed $IsActive
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
    }

    /**
     * @return mixed
     */
    public function getIsUnsub()
    {
        return $this->IsUnsub;
    }

    /**
     * @param mixed $IsUnsub
     */
    public function setIsUnsub($IsUnsub)
    {
        $this->IsUnsub = $IsUnsub;
    }

    /**
     * @return mixed
     */
    public function getListID()
    {
        return $this->ListID;
    }

    /**
     * @param mixed $ListID
     */
    public function setListID($ListID)
    {
        $this->ListID = $ListID;
    }

    /**
     * @return mixed
     */
    public function getListALT()
    {
        return $this->ListALT;
    }

    /**
     * @param mixed $ListALT
     */
    public function setListALT($ListALT)
    {
        $this->ListALT = $ListALT;
    }
}
