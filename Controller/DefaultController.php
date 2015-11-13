<?php

namespace Progrupa\MailjetBundle\Controller;

use Progrupa\MailjetBundle\Mailjet\Model\Contact;
use Progrupa\MailjetBundle\Mailjet\Model\Contactslist;
use Progrupa\MailjetBundle\Mailjet\Model\SendEmail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DefaultController
 * @package Progrupa\MailjetBundle\Controller
 * @Route("/mailjet")
 */
class DefaultController extends Controller
{
    /**
     * @Route("", name="progrupa_mailjet_homepage")
     * @Template()
     */
    public function indexAction()
    {
        $email = new SendEmail();
        $email
            ->setFromName('"Stefek" <biuro@progrupa.com>')
            ->addTo('dominik.kasprzak@progrupa.com')
            ->setSubject('Test mejldżeta')
            ->setText('Wiadomość testowa')
            ->addAttachement('/www/pms/file.txt', 'optional_name.txt')
            ->setMjCampaign(490322)
        ;

        $res = $this->get('mailjet.api.send')->send($email);

        var_dump($res);

        return array();
    }

    /**
     * @Route("/contacts-lists", name="progrupa_mailjet_contacts_lists")
     * @Template
     */
    public function contactsListsAction()
    {
        $lists = $this->get('mailjet.api.factory')->create(Contactslist::class)->getList();

        return array(
            'result' => $lists
        );
    }

    /**
     * @Route("/contacts", name="progrupa_mailjet_contacts")
     * @Template
     */
    public function contactsAction()
    {
        $lists = $this->get('mailjet.api.factory')->create(Contact::class)->getList();

        return array(
            'result' => $lists
        );
    }
}
