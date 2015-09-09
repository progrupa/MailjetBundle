<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Manycontacts Model
 *
 * Special resource to add more than 1 contact in 1 call
 */
class Manycontacts implements ModelInterface
{
    public static function getResource()
    {
        return 'manycontacts';
    }

    /**
     * A JSON Array with properties ListID - valid list_id and Action - one of the values "addforce", "addnoforce", "remove", "unsub".
     * @Type("array<integer, string>")
     * @SerializedName("ContactsLists")
     */
    protected $ContactsLists;

    /**
     * A JSON array. Each contact is represented by its Email, Name and Properties - a JSON object containing properties values for this contact
     * @Type("array<Progrupa\MailjetBundle\Mailjet\Model\Contact>")
     * @SerializedName("Contacts")
     */
    protected $Contacts;

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

    /**
     * @return mixed
     */
    public function getContacts()
    {
        return $this->Contacts;
    }

    /**
     * @param mixed $Contacts
     */
    public function setContacts($Contacts)
    {
        $this->Contacts = $Contacts;
    }
}

