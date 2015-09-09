<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ManageContactsLists implements ModelInterface
{
    public static function getResource()
    {
        return 'managecontactslists';
    }

    /**
     * @Type("array<integer, string>")
     * @SerializedName("ContactsLists")
     */
    protected $ContactsLists;

    /**
     * @return mixed
     */
    public function getContactsLists()
    {
        return $this->ContactsLists;
    }

    /**
     * @param mixed $ContactsLists
     */
    public function setContactsLists($ContactsLists)
    {
        $this->ContactsLists = $ContactsLists;
    }
}
