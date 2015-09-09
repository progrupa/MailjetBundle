<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * AX testing object
 */
class AxTesting extends AbstractModel
{
    public static function getResource()
    {
        return 'axtesting';
    }

    /**
     * ID reference to ContactsList
     * @Type("integer")
     * @SerializedName("ContactListID")
     */
    protected $ContactListID = null;

    /**
     * Value of the Address field of the related ContactsList resource
     * @Type("string")
     * @SerializedName("ContactListALT")
     */
    protected $ContactListALT = null;

    /**
     * Is the object deleted?
     * @Type("boolean")
     * @SerializedName("Deleted")
     */
    protected $Deleted = null;

    /**
     * Automatic/Manual
     * Allowed values:
     * - automatic
     * - manual
     * @Type("string")
     * @SerializedName("Mode")
     */
    protected $Mode = null;

    /**
     * Display name for the testing object
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Percentage of contact list
     * @Type("float")
     * @SerializedName("Percentage")
     */
    protected $Percentage = null;

    /**
     * Time to decide the winner version
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("RemainderAt")
     */
    protected $RemainderAt = null;

    /**
     * ID reference to ContactFilter
     * @Type("integer")
     * @SerializedName("SegmentationID")
     */
    protected $SegmentationID = null;

    /**
     * Value of the Name field of the related ContactFilter resource
     * @Type("string")
     * @SerializedName("SegmentationALT")
     */
    protected $SegmentationALT = null;

    /**
     * Is the object starred?
     * @Type("boolean")
     * @SerializedName("Starred")
     */
    protected $Starred = null;

    /**
     * Timestamp when to start
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("StartAt")
     */
    protected $StartAt = null;

    /**
     * Status of the AXTesting object
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * More detailed status code.
     * @Type("integer")
     * @SerializedName("StatusCode")
     */
    protected $StatusCode = null;

    /**
     * Localized string for Status code explanation
     * @Type("string")
     * @SerializedName("StatusString")
     */
    protected $StatusString = null;

    /**
     * Click rate used to decide winning NL version
     * @Type("float")
     * @SerializedName("WinnerClickRate")
     */
    protected $WinnerClickRate = null;

    /**
     * ID of newsletter that won
     * @Type("integer")
     * @SerializedName("WinnerID")
     */
    protected $WinnerID = null;

    /**
     * OpenRate/clickRate/UnsubRate/SpamRate/MJSCore
     * Allowed values:
     * - OpenRate
     * - ClickRate
     * - SpamRate
     * - UnsubRate
     * - MJScore
     * @Type("string")
     * @SerializedName("WinnerMethod")
     */
    protected $WinnerMethod = null;

    /**
     * Open rate used to decide winning NL version
     * @Type("float")
     * @SerializedName("WinnerOpenRate")
     */
    protected $WinnerOpenRate = null;

    /**
     * Spam rate used to decide winning NL version
     * @Type("float")
     * @SerializedName("WinnerSpamRate")
     */
    protected $WinnerSpamRate = null;

    /**
     * Unsub rate used to decide winning NL version
     * @Type("float")
     * @SerializedName("WinnerUnsubRate")
     */
    protected $WinnerUnsubRate = null;
}
