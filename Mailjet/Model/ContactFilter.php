<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


class ContactFilter implements ModelInterface
{
    public static function getResource()
    {
        return 'contactfilter';
    }

    /**
     * Textual description of the filter.
     */
    #[SerializedName('Description')]
    protected $Description = null;
    /**
     * Filter Expression. Checked for syntactical correctness when writing
     */
    #[SerializedName('Expression')]
    protected $Expression = null;
    /**
     * Filter Expression. Checked for syntactical correctness when writing
     */
    #[SerializedName('ID')]
    protected $ID = null;
    /**
     * A unique name for this filter.
     */
    #[SerializedName('Name')]
    protected $Name = null;
    /**
     * The status of the filter - used, unused, deleted
     */
    #[SerializedName('Status')]
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
