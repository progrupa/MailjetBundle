<?php

namespace AppBundle\Controller;

use Progrupa\MailjetBundle\Mailjet\Api\Result;
use Progrupa\MailjetBundle\Mailjet\Model\Apikey;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $mailjet = $this->get('mailjet.api.newsletter');

        /** @var Result $result */
        $result = $mailjet->getList();

        var_dump($result->getData());
        var_dump($result->getObjects());

        return new Response();
    }
}
