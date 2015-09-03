<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 26/08/15
 * Time: 13:26
 */

namespace Progrupa\MailjetBundle\Mailjet\Api;

use Progrupa\MailjetBundle\Mailjet\Model\Apikey as ApikeyModel;

class Apikey extends AbstractApi
{
    /**
     * @return string Resource name on the endpoint
     */
    protected function getResource()
    {
        return 'apikey';
    }

    /**
     * @return string Classname of the api model
     */
    public function getModel()
    {
        return ApikeyModel::class;
    }

}
