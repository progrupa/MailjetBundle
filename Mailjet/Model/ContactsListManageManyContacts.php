<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContactsListManageManyContacts implements ChildModelInterface
{
    const ACTION_ADD_FORCE = 'addforce';
    const ACTION_ADD_NO_FORCE = 'addnoforce';
    const ACTION_REMOVE = 'remove';
    const ACTION_UNSUB = 'unsub';

    public static function getResource()
    {
        return 'contactslist/{id}/managemanycontacts';
    }

    /**
     * Action is any of the actions allowed: "addforce", "addnoforce", "remove", "unsub". The action will be applied to the whole list
     * @Type("string")
     * @SerializedName("Action")
     */
    protected $Action = null;

    /**
     * A JSON array. Each contact is represented by its Email, Name, and Properties - a JSON object containing properties values for this contact
     * @Type("array<Progrupa\MailjetBundle\Mailjet\Model\Contact>")
     * @SerializedName("Contacts")
     */
    protected $Contacts = null;

    public function getID()
    {
        return null;
    }
    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * @param mixed $Action
     */
    public function setAction($Action)
    {
        $this->Action = $Action;
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
