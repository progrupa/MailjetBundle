<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


/**
 * Newsletter Model
 *
 * Newsletter data
 */
class Newsletter extends AbstractModel
{
    public static function getResource()
    {
        return 'newsletter';
    }

    /**
     * Fraction of AXTesting in percentage. Zero means remainder
     * @SerializedName("AXFraction")
     */
    protected $AXFraction = null;

    /**
     * Display name for the fraction
     * @SerializedName("AXFractionName ")
     */
    protected $AXFractionName = null;

    /**
     * A reference to AXTesting object
     * @SerializedName("AXTesting")
     */
    protected $AXTesting = null;

    /**
     * Callback URL
     * @SerializedName("DeliveredCount")
     */
    protected $Callback = null;

    /**
     * Reference to campaign created for this newsletter.
     * @SerializedName("CampaignID")
     */
    protected $CampaignID = null;

    /**
     * Reference to campaign created for this newsletter.
     * @SerializedName("CampaignALT")
     */
    protected $CampaignALT = null;

    /**
     * Reference to contacts list to which newsletter will be sent.
     * @SerializedName("ContactsListID")
     */
    protected $ContactsListID = null;

    /**
     * Reference to contacts list to which newsletter will be sent.
     * @SerializedName("ContactsListALT")
     */
    protected $ContactsListALT = null;

    /**
     * When the newsletter was delivered.
     * @SerializedName("DeliveredAt")
     */
    protected $DeliveredAt = null;

    /**
     * Edit mode for newsletter
     * @SerializedName("EditMode")
     */
    protected $EditMode = null;

    /**
     * Edit type
     * @SerializedName("EditType")
     */
    protected $EditType = null;

    /**
     * Footer type to generate.
     * @SerializedName("Footer")
     */
    protected $Footer = null;

    /**
     * Address to use in footer.
     * @SerializedName("FooterAddress")
     */
    protected $FooterAddress = null;

    /**
     * What kind of footer to generate.
     * @SerializedName("FooterWYSIWYGType")
     */
    protected $FooterWYSIWYGType = null;

    /**
     * Filename to use in header
     * @SerializedName("HeaderFilename")
     */
    protected $HeaderFilename = null;

    /**
     * Link used in header
     * @SerializedName("HeaderLink")
     */
    protected $HeaderLink = null;

    /**
     * Text of header
     * @SerializedName("HeaderText")
     */
    protected $HeaderText = null;

    /**
     * URL used in header
     * @SerializedName("HeaderUrl")
     */
    protected $HeaderUrl = null;

    /**
     * IP address used to create newsletter
     * @SerializedName("Ip")
     */
    protected $Ip = null;

    /**
     * Has the newsletter been handled by Mailjet ?
     * @SerializedName("IsHandled")
     */
    protected $IsHandled = false;

    /**
     * Is this a starred newsletter ?
     * @SerializedName("IsStarred")
     */
    protected $IsStarred = false;

    /**
     * Does the newsletter include a text version ?
     * @SerializedName("IsTextPartIncluded")
     */
    protected $IsTextPartIncluded = false;

    /**
     * Locale in which the information in this record is recorded.
     * @SerializedName("Locale")
     */
    protected $Locale = null;

    /**
     * Timestamp when newsletter content was last modified.
     * @SerializedName("ModifiedAt")
     */
    protected $ModifiedAt = null;

    /**
     * Type of permalink that should be added to the newsletter.
     * @SerializedName("Permalink")
     */
    protected $Permalink = null;

    /**
     * Host for the permalink
     * @SerializedName("PermalinkHost")
     */
    protected $PermalinkHost = null;

    /**
     * ?
     * @SerializedName("PermalinkWYSIWYGType")
     */
    protected $PermalinkWYSIWYGType = null;

    /**
     * ?
     * @SerializedName("PolitenessMode")
     */
    protected $PolitenessMode = null;

    /**
     * Reply-To address for the mail.
     * @SerializedName("ReplyEmail")
     */
    protected $ReplyEmail = null;

    /**
     * ID reference to ContactFilter
     * @SerializedName("SegmentationID")
     */
    protected $SegmentationID = null;

    /**
     * Value of the Name field of the related ContactFilter resource
     * @SerializedName("SegmentationALT")
     */
    protected $SegmentationALT = null;

    /**
     * Sender
     * @SerializedName("Sender")
     */
    protected $Sender = null;

    /**
     * Sender email address in headers
     * @SerializedName("SenderEmail")
     */
    protected $SenderEmail = null;

    /**
     * Name of the sender in Sender headers
     * @SerializedName("SenderName")
     */
    protected $SenderName = null;

    /**
     * Status of the newsletter
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * Newsletter subject
     * @SerializedName("Subject")
     */
    protected $Subject = null;

    /**
     * Template from which this newsletter was generated, or as which it was last
     * saved.
     * @SerializedName("TemplateID")
     */
    protected $TemplateID = null;

    /**
     * Address used for testing
     * @SerializedName("TestAddress")
     */
    protected $TestAddress = null;

    /**
     * Newsletter title
     * @SerializedName("Title")
     */
    protected $Title = null;

    /**
     * URL where an online version of the newsletter can be found [?]
     * @SerializedName("Url")
     */
    protected $Url = null;

    /**
     * @return mixed
     */
    public function getAXFraction()
    {
        return $this->AXFraction;
    }

    /**
     * @param mixed $AXFraction
     */
    public function setAXFraction($AXFraction)
    {
        $this->AXFraction = $AXFraction;
    }

    /**
     * @return mixed
     */
    public function getAXFractionName()
    {
        return $this->AXFractionName;
    }

    /**
     * @param mixed $AXFractionName
     */
    public function setAXFractionName($AXFractionName)
    {
        $this->AXFractionName = $AXFractionName;
    }

    /**
     * @return mixed
     */
    public function getAXTesting()
    {
        return $this->AXTesting;
    }

    /**
     * @param mixed $AXTesting
     */
    public function setAXTesting($AXTesting)
    {
        $this->AXTesting = $AXTesting;
    }

    /**
     * @return mixed
     */
    public function getCallback()
    {
        return $this->Callback;
    }

    /**
     * @param mixed $Callback
     */
    public function setCallback($Callback)
    {
        $this->Callback = $Callback;
    }

    /**
     * @return mixed
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }

    /**
     * @param mixed $CampaignID
     */
    public function setCampaignID($CampaignID)
    {
        $this->CampaignID = $CampaignID;
    }

    /**
     * @return mixed
     */
    public function getCampaignALT()
    {
        return $this->CampaignALT;
    }

    /**
     * @param mixed $CampaignALT
     */
    public function setCampaignALT($CampaignALT)
    {
        $this->CampaignALT = $CampaignALT;
    }

    /**
     * @return mixed
     */
    public function getContactsListID()
    {
        return $this->ContactsListID;
    }

    /**
     * @param mixed $ContactsListID
     */
    public function setContactsListID($ContactsListID)
    {
        $this->ContactsListID = $ContactsListID;
    }

    /**
     * @return mixed
     */
    public function getContactsListALT()
    {
        return $this->ContactsListALT;
    }

    /**
     * @param mixed $ContactsListALT
     */
    public function setContactsListALT($ContactsListALT)
    {
        $this->ContactsListALT = $ContactsListALT;
    }

    /**
     * @return mixed
     */
    public function getDeliveredAt()
    {
        return $this->DeliveredAt;
    }

    /**
     * @param mixed $DeliveredAt
     */
    public function setDeliveredAt($DeliveredAt)
    {
        $this->DeliveredAt = $DeliveredAt;
    }

    /**
     * @return mixed
     */
    public function getEditMode()
    {
        return $this->EditMode;
    }

    /**
     * @param mixed $EditMode
     */
    public function setEditMode($EditMode)
    {
        $this->EditMode = $EditMode;
    }

    /**
     * @return mixed
     */
    public function getEditType()
    {
        return $this->EditType;
    }

    /**
     * @param mixed $EditType
     */
    public function setEditType($EditType)
    {
        $this->EditType = $EditType;
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
    public function getIp()
    {
        return $this->Ip;
    }

    /**
     * @param mixed $Ip
     */
    public function setIp($Ip)
    {
        $this->Ip = $Ip;
    }

    /**
     * @return mixed
     */
    public function getIsHandled()
    {
        return $this->IsHandled;
    }

    /**
     * @param mixed $IsHandled
     */
    public function setIsHandled($IsHandled)
    {
        $this->IsHandled = $IsHandled;
    }

    /**
     * @return mixed
     */
    public function getIsStarred()
    {
        return $this->IsStarred;
    }

    /**
     * @param mixed $IsStarred
     */
    public function setIsStarred($IsStarred)
    {
        $this->IsStarred = $IsStarred;
    }

    /**
     * @return mixed
     */
    public function getIsTextPartIncluded()
    {
        return $this->IsTextPartIncluded;
    }

    /**
     * @param mixed $IsTextPartIncluded
     */
    public function setIsTextPartIncluded($IsTextPartIncluded)
    {
        $this->IsTextPartIncluded = $IsTextPartIncluded;
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
    public function getModifiedAt()
    {
        return $this->ModifiedAt;
    }

    /**
     * @param mixed $ModifiedAt
     */
    public function setModifiedAt($ModifiedAt)
    {
        $this->ModifiedAt = $ModifiedAt;
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
    public function getPermalinkHost()
    {
        return $this->PermalinkHost;
    }

    /**
     * @param mixed $PermalinkHost
     */
    public function setPermalinkHost($PermalinkHost)
    {
        $this->PermalinkHost = $PermalinkHost;
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
    public function getPolitenessMode()
    {
        return $this->PolitenessMode;
    }

    /**
     * @param mixed $PolitenessMode
     */
    public function setPolitenessMode($PolitenessMode)
    {
        $this->PolitenessMode = $PolitenessMode;
    }

    /**
     * @return mixed
     */
    public function getReplyEmail()
    {
        return $this->ReplyEmail;
    }

    /**
     * @param mixed $ReplyEmail
     */
    public function setReplyEmail($ReplyEmail)
    {
        $this->ReplyEmail = $ReplyEmail;
    }

    /**
     * @return mixed
     */
    public function getSegmentationID()
    {
        return $this->SegmentationID;
    }

    /**
     * @param mixed $SegmentationID
     */
    public function setSegmentationID($SegmentationID)
    {
        $this->SegmentationID = $SegmentationID;
    }

    /**
     * @return mixed
     */
    public function getSegmentationALT()
    {
        return $this->SegmentationALT;
    }

    /**
     * @param mixed $SegmentationALT
     */
    public function setSegmentationALT($SegmentationALT)
    {
        $this->SegmentationALT = $SegmentationALT;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->Sender;
    }

    /**
     * @param mixed $Sender
     */
    public function setSender($Sender)
    {
        $this->Sender = $Sender;
    }

    /**
     * @return mixed
     */
    public function getSenderEmail()
    {
        return $this->SenderEmail;
    }

    /**
     * @param mixed $SenderEmail
     */
    public function setSenderEmail($SenderEmail)
    {
        $this->SenderEmail = $SenderEmail;
    }

    /**
     * @return mixed
     */
    public function getSenderName()
    {
        return $this->SenderName;
    }

    /**
     * @param mixed $SenderName
     */
    public function setSenderName($SenderName)
    {
        $this->SenderName = $SenderName;
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
    public function getTemplateID()
    {
        return $this->TemplateID;
    }

    /**
     * @param mixed $TemplateID
     */
    public function setTemplateID($TemplateID)
    {
        $this->TemplateID = $TemplateID;
    }

    /**
     * @return mixed
     */
    public function getTestAddress()
    {
        return $this->TestAddress;
    }

    /**
     * @param mixed $TestAddress
     */
    public function setTestAddress($TestAddress)
    {
        $this->TestAddress = $TestAddress;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param mixed $Title
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param mixed $Url
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
    }
}
