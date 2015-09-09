<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContactMetadata implements ModelInterface
{
    public static function getResource()
    {
        return 'contactmetadata';
    }

    /**
     * Type of data.
     * Allowed values:
     * - str
     * - int
     * - float
     * - bool
     * @Type("string")
     * @SerializedName("Datatype")
     */
    protected $Datatype = null;

    /**
     * ID of this definition.
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * The name of the data. The name must be unique within a namespace.
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * The namespace for this data. There are 2 possible values: static and historic.
     * @Type("string")
     * @SerializedName("NameSpace")
     */
    protected $NameSpace = null;

    /**
     * @return mixed
     */
    public function getDatatype()
    {
        return $this->Datatype;
    }

    /**
     * @param mixed $Datatype
     */
    public function setDatatype($Datatype)
    {
        $this->Datatype = $Datatype;
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
    public function getNameSpace()
    {
        return $this->NameSpace;
    }

    /**
     * @param mixed $NameSpace
     */
    public function setNameSpace($NameSpace)
    {
        $this->NameSpace = $NameSpace;
    }
}
