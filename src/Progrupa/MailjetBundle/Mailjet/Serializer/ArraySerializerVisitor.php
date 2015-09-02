<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 01/09/15
 * Time: 09:25
 */

namespace Progrupa\MailjetBundle\Mailjet\Serializer;


use JMS\Serializer\GenericSerializationVisitor;
use JMS\Serializer\scalar;

class ArraySerializerVisitor extends GenericSerializationVisitor
{
    /**
     * @return array
     */
    public function getResult()
    {
        return $this->getRoot();
    }

}
