<?php

namespace Progrupa\MailjetBundle\Controller;

use Progrupa\MailjetBundle\Mailjet\Api\Factory;
use Progrupa\MailjetBundle\Mailjet\Model\Contact;
use Progrupa\MailjetBundle\Mailjet\Model\Contactslist;
use Progrupa\MailjetBundle\Mailjet\Model\ContactsListManageManyContacts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * Class DefaultController
 * @package Progrupa\MailjetBundle\Controller
 * @Route("/mailjet")
 */
class DefaultController extends AbstractController
{
    private $mailjetFactory;
    private $translator;

    public function __construct(Factory $mailjetFactory, TranslatorInterface $translator)
    {
        $this->mailjetFactory = $mailjetFactory;
        $this->translator = $translator;
    }

    /**
     * @Route("/unsubscribe/{contactListId}/{contactEmail}", name="progrupa_mailjet_unsubscribe", defaults={"contactEmail": null})
     * @Template()
     */
    public function unsubscribeAction(Request $request, $contactListId, $contactEmail)
    {
        /** @var Contact $contact */
        $contact = $this->mailjetFactory->create(Contact::class)->get($contactEmail)->getObject();
        /** @var Contactslist $contactList */
        $contactList = $this->mailjetFactory->create(Contactslist::class)->get($contactListId)->getObject();

        if (! $contact) {
            throw $this->createNotFoundException($this->translator->trans('unsubscribe.contactNotFound', ['%email%' => $contactEmail], 'ProgrupaMailjetBundle'));
        }

        if (! $contactList) {
            throw $this->createNotFoundException($this->translator->trans('unsubscribe.contactListNotFound', ['%contactList%' => $contactListId], 'ProgrupaMailjetBundle'));
        }

        $unsubAction = new ContactsListManageManyContacts();
        $unsubAction->setAction(ContactsListManageManyContacts::ACTION_UNSUB);
        $unsubAction->setContacts([$contact]);

        $unsubApi = $this->mailjetFactory->create(ContactsListManageManyContacts::class);
        $unsubApi->setParent($contactList);
        $unsubApi->update($unsubAction);

        return [
            'contact' => $contact,
            'contactList' => $contactList,
        ];
    }
}
