<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 31/08/15
 * Time: 12:11
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;

use Progrupa\MailjetBundle\Mailjet\Model\Contactslist as Model;

class Contactslist extends AbstractApi
{
    /**
     * @return string Resource name on the endpoint
     */
    protected function getResource()
    {
        return 'contactslist';
    }

    /**
     * @return string Classname of the api model
     */
    public function getModel()
    {
        return Model::class;
    }

}

