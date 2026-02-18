<?php

namespace Progrupa\MailjetBundle\Controller;

use Progrupa\MailjetBundle\Mailjet\Api\Factory;
use Progrupa\MailjetBundle\Mailjet\Model\Contact;
use Progrupa\MailjetBundle\Mailjet\Model\Contactslist;
use Progrupa\MailjetBundle\Mailjet\Model\ContactsListManageManyContacts;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/mailjet')]
class DefaultController extends AbstractController
{
    public function __construct(
        private Factory $mailjetFactory,
        private TranslatorInterface $translator,
    ) {
    }

    #[Route('/unsubscribe/{contactListId}/{contactEmail}', name: 'progrupa_mailjet_unsubscribe', defaults: ['contactEmail' => null])]
    public function unsubscribeAction(Request $request, $contactListId, $contactEmail): Response
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

        return $this->render('@ProgrupaMailjet/Default/unsubscribe.html.twig', [
            'contact' => $contact,
            'contactList' => $contactList,
        ]);
    }
}
