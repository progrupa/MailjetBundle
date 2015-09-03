<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 31/08/15
 * Time: 12:22
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;

use Progrupa\MailjetBundle\Mailjet\Model\Listrecipient as Model;

class Listrecipient extends AbstractApi
{
    /**
     * @return string Resource name on the endpoint
     */
    protected function getResource()
    {
        return 'listrecipient';
    }

    /**
     * @return string Classname of the api model
     */
    public function getModel()
    {
        return Model::class;
    }

}
