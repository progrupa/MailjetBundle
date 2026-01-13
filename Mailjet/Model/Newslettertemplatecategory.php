<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Newslettertemplatecategory Model
 *
 * Global newsletter template categories
 */
class Newslettertemplatecategory implements ModelInterface
{
    public static function getResource()
    {
        return 'newslettertemplatecategory';
    }

    /**
     * Category description (localized)
     * @SerializedName("Description")
     */
    protected $Description = null;

    /**
     * Unique numerical ID for this object
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Locale in which the information in this record is recorded.
     * @SerializedName("Locale")
     */
    protected $Locale = null;

    /**
     * Parent category reference.
     * @SerializedName("ParentCategoryID")
     */
    protected $ParentCategoryID = null;

    /**
     * Category name.
     * @SerializedName("Value")
     */
    protected $Value = null;

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
    public function getLocale()
    {
        return $this->Locale;
    }

    /**
     * @param mixed $Locale
     */
    public function setLocale($Locale)
    {
        $this->Locale = $Locale;
    }

    /**
     * @return mixed
     */
    public function getParentCategoryID()
    {
        return $this->ParentCategoryID;
    }

    /**
     * @param mixed $ParentCategoryID
     */
    public function setParentCategoryID($ParentCategoryID)
    {
        $this->ParentCategoryID = $ParentCategoryID;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param mixed $Value
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
    }
}
