<?php

namespace Progrupa\MailjetBundle\Controller;

use Progrupa\MailjetBundle\Mailjet\Model\Contact;
use Progrupa\MailjetBundle\Mailjet\Model\Contactslist;
use Progrupa\MailjetBundle\Mailjet\Model\ContactsListManageManyContacts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DefaultController
 * @package Progrupa\MailjetBundle\Controller
 * @Route("/mailjet")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/unsubscribe/{contactListId}/{contactEmail}", name="progrupa_mailjet_unsubscribe", defaults={"contactEmail": null})
     * @Template()
     */
    public function unsubscribeAction(Request $request, $contactListId, $contactEmail)
    {
        /** @var Contact $contact */
        $contact = $this->get('mailjet.api.factory')->create(Contact::class)->get($contactEmail)->getObject();
        /** @var Contactslist $contactList */
        $contactList = $this->get('mailjet.api.factory')->create(Contactslist::class)->get($contactListId)->getObject();

        if (! $contact) {
            throw $this->createNotFoundException($this->get('translator')->trans('unsubscribe.contactNotFound', ['%email%' => $contactEmail], 'ProgrupaMailjetBundle'));
        }

        if (! $contactList) {
            throw $this->createNotFoundException($this->get('translator')->trans('unsubscribe.contactListNotFound', ['%contactList%' => $contactListId], 'ProgrupaMailjetBundle'));
        }

        $unsubAction = new ContactsListManageManyContacts();
        $unsubAction->setAction(ContactsListManageManyContacts::ACTION_UNSUB);
        $unsubAction->setContacts([$contact]);

        $unsubApi = $this->get('mailjet.api.factory')->create(ContactsListManageManyContacts::class);
        $unsubApi->setParent($contactList);
        $unsubApi->update($unsubAction);

        return [
            'contact' => $contact,
            'contactList' => $contactList,
        ];
    }
}
