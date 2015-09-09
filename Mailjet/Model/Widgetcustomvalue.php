<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Widgetcustomvalue Model
 *
 * Mailjet widget settings
 */
class Widgetcustomvalue implements ModelInterface
{
    public static function getResource()
    {
        return 'widgetcustomvalue';
    }

    /**
     * APIKey to which the widget and custom value belongs
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $APIKeyID = null;

    /**
     * APIKey to which the widget and custom value belongs
     * @Type("string")
     * @SerializedName("APIKeyALT")
     */
    protected $APIKeyALT = null;

    /**
     * Should the value be displayed
     * @Type("boolean")
     * @SerializedName("Display")
     */
    protected $Display = false;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Name of the custom value
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Value of the custom value
     * @Type("string")
     * @SerializedName("Value")
     */
    protected $Value = null;

    /**
     * Widget for which the value is registered.
     * @Type("integer")
     * @SerializedName("WidgetID")
     */
    protected $WidgetID = null;

    /**
     * @return mixed
     */
    public function getAPIKeyID()
    {
        return $this->APIKeyID;
    }

    /**
     * @param mixed $APIKeyID
     */
    public function setAPIKeyID($APIKeyID)
    {
        $this->APIKeyID = $APIKeyID;
    }

    /**
     * @return mixed
     */
    public function getAPIKeyALT()
    {
        return $this->APIKeyALT;
    }

    /**
     * @param mixed $APIKeyALT
     */
    public function setAPIKeyALT($APIKeyALT)
    {
        $this->APIKeyALT = $APIKeyALT;
    }

    /**
     * @return mixed
     */
    public function getDisplay()
    {
        return $this->Display;
    }

    /**
     * @param mixed $Display
     */
    public function setDisplay($Display)
    {
        $this->Display = $Display;
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

    /**
     * @return mixed
     */
    public function getWidgetID()
    {
        return $this->WidgetID;
    }

    /**
     * @param mixed $WidgetID
     */
    public function setWidgetID($WidgetID)
    {
        $this->WidgetID = $WidgetID;
    }
}
