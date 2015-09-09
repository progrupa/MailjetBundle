<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 *  An action to schedule a newsletter
 */
class NewsletterSchedule implements ModelInterface
{
    public static function getResource()
    {
        return 'newsletter/{id}/schedule';
    }

    /**
     * Timestamp when object was created in database
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("Date")
     */
    protected $Date = null;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param mixed $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }
}
