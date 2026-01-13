<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


class ManageContactsLists implements ModelInterface
{
    public static function getResource()
    {
        return 'managecontactslists';
    }

    /**
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
