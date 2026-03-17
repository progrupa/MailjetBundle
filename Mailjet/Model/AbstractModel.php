<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


abstract class AbstractModel implements ModelInterface
{
    /**
     * Unique numerical ID for this object
     */
    #[SerializedName('ID')]
    protected $ID = null;

    /**
     * Timestamp when object was created in database
     */
    #[SerializedName('CreatedAt')]
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
