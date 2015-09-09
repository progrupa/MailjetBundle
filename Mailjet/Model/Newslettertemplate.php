<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Newslettertemplate Model
 *
 * Newsletter templates
 */
class Newslettertemplate extends AbstractModel
{
    public static function getResource()
    {
        return 'newslettertemplate';
    }

    /**
     * Category for this newsletter
     * @Type("string")
     * @SerializedName("CategoryID")
     */
    protected $CategoryID = null;

    /**
     * Footer type to generate.
     * @Type("string")
     * @SerializedName("Footer")
     */
    protected $Footer = null;

    /**
     * Address to use in footer.
     * @Type("string")
     * @SerializedName("FooterAddress")
     */
    protected $FooterAddress = null;

    /**
     * What kind of footer to generate.
     * @Type("integer")
     * @SerializedName("FooterWYSIWYGType")
     */
    protected $FooterWYSIWYGType = null;

    /**
     * Filename to use in header
     * @Type("string")
     * @SerializedName("HeaderFilename")
     */
    protected $HeaderFilename = null;

    /**
     * Link used in header
     * @Type("string")
     * @SerializedName("HeaderLink")
     */
    protected $HeaderLink = null;

    /**
     * Text of header
     * @Type("string")
     * @SerializedName("HeaderText")
     */
    protected $HeaderText = null;

    /**
     * URL used in header
     * @Type("string")
     * @SerializedName("HeaderUrl")
     */
    protected $HeaderUrl = null;

    /**
     * Locale in which the information in this record is recorded.
     * @Type("string")
     * @SerializedName("Locale")
     */
    protected $Locale = null;

    /**
     * Name for this newsletter
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Type of permalink that should be added to the newsletter.
     * @Type("string")
     * @SerializedName("Permalink")
     */
    protected $Permalink = null;

    /**
     * ?
     * @Type("integer")
     * @SerializedName("PermalinkWYSIWYGType")
     */
    protected $PermalinkWYSIWYGType = null;

    /**
     * When specified in POST or PUT, copy data from this newsletter.
     * @Type("integer")
     * @SerializedName("SourceNewsLetterID")
     */
    protected $SourceNewsLetterID = null;

    /**
     * Status of the newsletter template
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }

    /**
     * @param mixed $CategoryID
     */
    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;
    }

    /**
     * @return mixed
     */
    public function getFooter()
    {
        return $this->Footer;
    }

    /**
     * @param mixed $Footer
     */
    public function setFooter($Footer)
    {
        $this->Footer = $Footer;
    }

    /**
     * @return mixed
     */
    public function getFooterAddress()
    {
        return $this->FooterAddress;
    }

    /**
     * @param mixed $FooterAddress
     */
    public function setFooterAddress($FooterAddress)
    {
        $this->FooterAddress = $FooterAddress;
    }

    /**
     * @return mixed
     */
    public function getFooterWYSIWYGType()
    {
        return $this->FooterWYSIWYGType;
    }

    /**
     * @param mixed $FooterWYSIWYGType
     */
    public function setFooterWYSIWYGType($FooterWYSIWYGType)
    {
        $this->FooterWYSIWYGType = $FooterWYSIWYGType;
    }

    /**
     * @return mixed
     */
    public function getHeaderFilename()
    {
        return $this->HeaderFilename;
    }

    /**
     * @param mixed $HeaderFilename
     */
    public function setHeaderFilename($HeaderFilename)
    {
        $this->HeaderFilename = $HeaderFilename;
    }

    /**
     * @return mixed
     */
    public function getHeaderLink()
    {
        return $this->HeaderLink;
    }

    /**
     * @param mixed $HeaderLink
     */
    public function setHeaderLink($HeaderLink)
    {
        $this->HeaderLink = $HeaderLink;
    }

    /**
     * @return mixed
     */
    public function getHeaderText()
    {
        return $this->HeaderText;
    }

    /**
     * @param mixed $HeaderText
     */
    public function setHeaderText($HeaderText)
    {
        $this->HeaderText = $HeaderText;
    }

    /**
     * @return mixed
     */
    public function getHeaderUrl()
    {
        return $this->HeaderUrl;
    }

    /**
     * @param mixed $HeaderUrl
     */
    public function setHeaderUrl($HeaderUrl)
    {
        $this->HeaderUrl = $HeaderUrl;
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
    public function getPermalink()
    {
        return $this->Permalink;
    }

    /**
     * @param mixed $Permalink
     */
    public function setPermalink($Permalink)
    {
        $this->Permalink = $Permalink;
    }

    /**
     * @return mixed
     */
    public function getPermalinkWYSIWYGType()
    {
        return $this->PermalinkWYSIWYGType;
    }

    /**
     * @param mixed $PermalinkWYSIWYGType
     */
    public function setPermalinkWYSIWYGType($PermalinkWYSIWYGType)
    {
        $this->PermalinkWYSIWYGType = $PermalinkWYSIWYGType;
    }

    /**
     * @return mixed
     */
    public function getSourceNewsLetterID()
    {
        return $this->SourceNewsLetterID;
    }

    /**
     * @param mixed $SourceNewsLetterID
     */
    public function setSourceNewsLetterID($SourceNewsLetterID)
    {
        $this->SourceNewsLetterID = $SourceNewsLetterID;
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
