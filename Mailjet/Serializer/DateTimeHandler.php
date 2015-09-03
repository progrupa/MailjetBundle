<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 13/03/15
 * Time: 09:50
 */

namespace Progrupa\MailjetBundle\Mailjet\Serializer;


use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\DateHandler;
use JMS\Serializer\JsonDeserializationVisitor;

class DateTimeHandler extends DateHandler
{
    public static function getSubscribingMethods()
    {
        $methods = parent::getSubscribingMethods();
        $methods[] = array(
            'type' => 'DateTime',
            'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
            'format' => 'array',
        );
        return $methods;
    }

    public function deserializeDateTimeFromArray(ArrayDeserializerVisitor $visitor, $data, array $type)
    {
        if (null === $data) {
            return null;
        }

        return $this->deserializeDateTimeFromJson(new JsonDeserializationVisitor($visitor->getNamingStrategy()), $data, $type);
    }
}
