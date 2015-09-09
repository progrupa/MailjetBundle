<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContactFilter implements ModelInterface
{
    public static function getResource()
    {
        return 'contactfilter';
    }

    /**
     * Textual description of the filter.
     * @Type("string")
     * @SerializedName("Description")
     */
    protected $Description = null;
    /**
     * Filter Expression. Checked for syntactical correctness when writing
     * @Type("string")
     * @SerializedName("Expression")
     */
    protected $Expression = null;
    /**
     * Filter Expression. Checked for syntactical correctness when writing
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;
    /**
     * A unique name for this filter.
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;
    /**
     * The status of the filter - used, unused, deleted
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getExpression()
    {
        return $this->Expression;
    }

    /**
     * @param mixed $Expression
     */
    public function setExpression($Expression)
    {
        $this->Expression = $Expression;
    }

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
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }
}
