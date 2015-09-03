<?php
/**
 * Created by PhpStorm.
 * User: dominikkasprzak
 * Date: 27/08/15
 * Time: 11:30
 */

namespace Progrupa\MailjetBundle\Mailjet\Model;


use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

abstract class AbstractModel implements ModelInterface
{
    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Timestamp when object was created in database
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("CreatedAt")
     */
    protected $CreatedAt = null;

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->CreatedAt;
    }

    /**
     * @param \DateTime $CreatedAt
     */
    public function setCreatedAt(\DateTime $CreatedAt)
    {
        $this->CreatedAt = $CreatedAt;
    }
}
