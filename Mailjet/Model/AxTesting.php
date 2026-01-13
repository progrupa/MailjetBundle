<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Annotation\SerializedName;


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
     * @SerializedName("ContactListID")
     */
    protected $ContactListID = null;

    /**
     * Value of the Address field of the related ContactsList resource
     * @SerializedName("ContactListALT")
     */
    protected $ContactListALT = null;

    /**
     * Is the object deleted?
     * @SerializedName("Deleted")
     */
    protected $Deleted = null;

    /**
     * Automatic/Manual
     * Allowed values:
     * - automatic
     * - manual
     * @SerializedName("Mode")
     */
    protected $Mode = null;

    /**
     * Display name for the testing object
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Percentage of contact list
     * @SerializedName("Percentage")
     */
    protected $Percentage = null;

    /**
     * Time to decide the winner version
     * @SerializedName("RemainderAt")
     */
    protected $RemainderAt = null;

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
     * Is the object starred?
     * @SerializedName("Starred")
     */
    protected $Starred = null;

    /**
     * Timestamp when to start
     * @SerializedName("StartAt")
     */
    protected $StartAt = null;

    /**
     * Status of the AXTesting object
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * More detailed status code.
     * @SerializedName("StatusCode")
     */
    protected $StatusCode = null;

    /**
     * Localized string for Status code explanation
     * @SerializedName("StatusString")
     */
    protected $StatusString = null;

    /**
     * Click rate used to decide winning NL version
     * @SerializedName("WinnerClickRate")
     */
    protected $WinnerClickRate = null;

    /**
     * ID of newsletter that won
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
     * @SerializedName("WinnerMethod")
     */
    protected $WinnerMethod = null;

    /**
     * Open rate used to decide winning NL version
     * @SerializedName("WinnerOpenRate")
     */
    protected $WinnerOpenRate = null;

    /**
     * Spam rate used to decide winning NL version
     * @SerializedName("WinnerSpamRate")
     */
    protected $WinnerSpamRate = null;

    /**
     * Unsub rate used to decide winning NL version
     * @SerializedName("WinnerUnsubRate")
     */
    protected $WinnerUnsubRate = null;
}
