<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Metadata Model
 *
 * Mailjet API meta data
 */
class Metadata implements ModelInterface
{
    public static function getResource()
    {
        return 'metadata';
    }

    /**
     * A list of the supported actions
     * @Type("array")
     * @SerializedName("Actions")
     */
    protected $Actions = null;

    /**
     * Current API version
     * @Type("string")
     * @SerializedName("APIVersion")
     */
    protected $APIVersion = null;

    /**
     * Description of resource.
     * @Type("string")
     * @SerializedName("Description")
     */
    protected $Description = null;

    /**
     * Applicable filters for this resource
     * @Type("array")
     * @SerializedName("Filters")
     */
    protected $Filters = null;

    /**
     * Is the resource inherently read-only
     * @Type("boolean")
     * @SerializedName("IsReadOnly")
     */
    protected $IsReadOnly = false;

    /**
     * Unique name of the resource
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * List of allowed operations in private API
     * @Type("array")
     * @SerializedName("PrivateOperations")
     */
    protected $PrivateOperations = null;

    /**
     * List of properties for this resource.
     * @Type("array")
     * @SerializedName("Properties")
     */
    protected $Properties = null;

    /**
     * List of allowed operations in public API
     * @Type("array")
     * @SerializedName("PublicOperations")
     */
    protected $PublicOperations = null;

    /**
     * Information about the fields on which a list of this resource can be sorted.
     * @Type("array")
     * @SerializedName("SortInfo")
     */
    protected $SortInfo = null;

    /**
     * Name of the property which can be used as an alternative unique key in the URL
     * (other than the ID)
     * @Type("string")
     * @SerializedName("UniqueKey")
     */
    protected $UniqueKey = null;

    /**
     * @return mixed
     */
    public function getActions()
    {
        return $this->Actions;
    }

    /**
     * @param mixed $Actions
     */
    public function setActions($Actions)
    {
        $this->Actions = $Actions;
    }

    /**
     * @return mixed
     */
    public function getAPIVersion()
    {
        return $this->APIVersion;
    }

    /**
     * @param mixed $APIVersion
     */
    public function setAPIVersion($APIVersion)
    {
        $this->APIVersion = $APIVersion;
    }

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
    public function getFilters()
    {
        return $this->Filters;
    }

    /**
     * @param mixed $Filters
     */
    public function setFilters($Filters)
    {
        $this->Filters = $Filters;
    }

    /**
     * @return mixed
     */
    public function getIsReadOnly()
    {
        return $this->IsReadOnly;
    }

    /**
     * @param mixed $IsReadOnly
     */
    public function setIsReadOnly($IsReadOnly)
    {
        $this->IsReadOnly = $IsReadOnly;
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
    public function getPrivateOperations()
    {
        return $this->PrivateOperations;
    }

    /**
     * @param mixed $PrivateOperations
     */
    public function setPrivateOperations($PrivateOperations)
    {
        $this->PrivateOperations = $PrivateOperations;
    }

    /**
     * @return mixed
     */
    public function getProperties()
    {
        return $this->Properties;
    }

    /**
     * @param mixed $Properties
     */
    public function setProperties($Properties)
    {
        $this->Properties = $Properties;
    }

    /**
     * @return mixed
     */
    public function getPublicOperations()
    {
        return $this->PublicOperations;
    }

    /**
     * @param mixed $PublicOperations
     */
    public function setPublicOperations($PublicOperations)
    {
        $this->PublicOperations = $PublicOperations;
    }

    /**
     * @return mixed
     */
    public function getSortInfo()
    {
        return $this->SortInfo;
    }

    /**
     * @param mixed $SortInfo
     */
    public function setSortInfo($SortInfo)
    {
        $this->SortInfo = $SortInfo;
    }

    /**
     * @return mixed
     */
    public function getUniqueKey()
    {
        return $this->UniqueKey;
    }

    /**
     * @param mixed $UniqueKey
     */
    public function setUniqueKey($UniqueKey)
    {
        $this->UniqueKey = $UniqueKey;
    }
}
