<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 27/08/15
 * Time: 15:32
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;

use Progrupa\MailjetBundle\Mailjet\Model\Contact as Model;

class Contact extends AbstractApi
{
    /**
     * @return string Resource name on the endpoint
     */
    protected function getResource()
    {
        return 'contact';
    }

    /**
     * @return string Classname of the api model
     */
    public function getModel()
    {
        return Model::class;
    }

}
