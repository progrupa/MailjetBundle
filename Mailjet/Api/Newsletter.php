<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 31/08/15
 * Time: 13:55
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;

use Progrupa\MailjetBundle\Mailjet\Model\Newsletter as Model;

class Newsletter extends AbstractApi
{
    /**
     * @return string Resource name on the endpoint
     */
    protected function getResource()
    {
        return 'newsletter';
    }

    /**
     * @return string Classname of the api model
     */
    public function getModel()
    {
        return Model::class;
    }

}
