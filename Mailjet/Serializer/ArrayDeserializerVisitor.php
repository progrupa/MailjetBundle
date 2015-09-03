<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 13/03/15
 * Time: 08:53
 */

namespace Progrupa\MailjetBundle\Mailjet\Serializer;


use JMS\Serializer\GenericDeserializationVisitor;

class ArrayDeserializerVisitor extends GenericDeserializationVisitor
{
    /**
     * @param array $data
     * @return array
     */
    protected function decode($data)
    {
        return $data;
    }
}
