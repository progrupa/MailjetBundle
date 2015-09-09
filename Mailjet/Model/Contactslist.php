<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Contactslist Model
 *
 * API key contact lists
 */
class Contactslist extends AbstractModel
{
    public static function getResource()
    {
        return 'contactslist';
    }

    /**
     * Email address at which this contacts of this list can be reached.
     * @Type("string")
     * @SerializedName("Address")
     */
    protected $Address = null;

    /**
     * Has this list been deleted or not.
     * @Type("boolean")
     * @SerializedName("IsDeleted")
     */
    protected $IsDeleted = false;

    /**
     * User-specified name for this contact list (must be unique)
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Number of subscribers for this list.
     * @Type("integer")
     * @SerializedName("SubscriberCount")
     */
    protected $SubscriberCount = null;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param mixed $IsDeleted
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
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

    /**
     * @return mixed
     */
    public function getSubscriberCount()
    {
        return $this->SubscriberCount;
    }

    /**
     * @param mixed $SubscriberCount
     */
    public function setSubscriberCount($SubscriberCount)
    {
        $this->SubscriberCount = $SubscriberCount;
    }
}

