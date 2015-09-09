<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Widget Model
 *
 * Mailjet widget definitions.
 */
class Widget extends AbstractModel
{
    public static function getResource()
    {
        return 'widget';
    }

    /**
     * Reference to Sender address for this widget
     * @Type("integer")
     * @SerializedName("FromID")
     */
    protected $FromID = null;

    /**
     * Reference to Sender address for this widget
     * @Type("string")
     * @SerializedName("FromALT")
     */
    protected $FromALT = null;

    /**
     * Is thewidget still active.
     * @Type("boolean")
     * @SerializedName("IsActive")
     */
    protected $IsActive = false;

    /**
     * Contactslist for which this widget handles subscriptions.
     * @Type("integer")
     * @SerializedName("ListID")
     */
    protected $ListID = null;

    /**
     * Contactslist for which this widget handles subscriptions.
     * @Type("string")
     * @SerializedName("ListALT")
     */
    protected $ListALT = null;

    /**
     * Locale in which the information in this record is recorded.
     * @Type("string")
     * @SerializedName("Locale")
     */
    protected $Locale = null;

    /**
     * Name for this widget
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Reply To email address for this widhet
     * @Type("string")
     * @SerializedName("Replyto")
     */
    protected $Replyto = null;

    /**
     * Sender name for this widget
     * @Type("string")
     * @SerializedName("Sendername")
     */
    protected $Sendername = null;

    /**
     * Subject for this widget
     * @Type("string")
     * @SerializedName("Subject")
     */
    protected $Subject = null;

    /**
     * Message to send when sending mail for this widget
     * @Type("integer")
     * @SerializedName("Template")
     */
    protected $Template = null;

    /**
     * @return mixed
     */
    public function getFromID()
    {
        return $this->FromID;
    }

    /**
     * @param mixed $FromID
     */
    public function setFromID($FromID)
    {
        $this->FromID = $FromID;
    }

    /**
     * @return mixed
     */
    public function getFromALT()
    {
        return $this->FromALT;
    }

    /**
     * @param mixed $FromALT
     */
    public function setFromALT($FromALT)
    {
        $this->FromALT = $FromALT;
    }

    /**
     * @return mixed
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * @param mixed $IsActive
     */
    public function setIsActive($IsActive)
    {
        $this->IsActive = $IsActive;
    }

    /**
     * @return mixed
     */
    public function getListID()
    {
        return $this->ListID;
    }

    /**
     * @param mixed $ListID
     */
    public function setListID($ListID)
    {
        $this->ListID = $ListID;
    }

    /**
     * @return mixed
     */
    public function getListALT()
    {
        return $this->ListALT;
    }

    /**
     * @param mixed $ListALT
     */
    public function setListALT($ListALT)
    {
        $this->ListALT = $ListALT;
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
    public function getReplyto()
    {
        return $this->Replyto;
    }

    /**
     * @param mixed $Replyto
     */
    public function setReplyto($Replyto)
    {
        $this->Replyto = $Replyto;
    }

    /**
     * @return mixed
     */
    public function getSendername()
    {
        return $this->Sendername;
    }

    /**
     * @param mixed $Sendername
     */
    public function setSendername($Sendername)
    {
        $this->Sendername = $Sendername;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * @param mixed $Subject
     */
    public function setSubject($Subject)
    {
        $this->Subject = $Subject;
    }

    /**
     * @return mixed
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     * @param mixed $Template
     */
    public function setTemplate($Template)
    {
        $this->Template = $Template;
    }
}
