<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Myprofile Model
 *
 * User profile data: payment information etc.
 */
class Myprofile implements ModelInterface
{
    public static function getResource()
    {
        return 'myprofile';
    }

    /**
     * City part of address
     * @Type("string")
     * @SerializedName("AddressCity")
	 */
    protected $AddressCity = null;

    /**
     * Country part of address
     * @Type("string")
     * @SerializedName("AddressCountry")
	 */
    protected $AddressCountry = null;

    /**
     * Postal code of address (ZIP)
     * @Type("string")
     * @SerializedName("AddressPostalCode")
	 */
    protected $AddressPostalCode = null;

    /**
     * Street and house number
     * @Type("string")
     * @SerializedName("AddressStreet")
	 */
    protected $AddressStreet = null;

    /**
     * Billing email address
     * @Type("string")
     * @SerializedName("BillingEmail")
	 */
    protected $BillingEmail = null;

    /**
     * User's birthday
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("BirthdayAt")
	 */
    protected $BirthdayAt = null;

    /**
     * Name of the company
     * @Type("string")
     * @SerializedName("CompanyName")
	 */
    protected $CompanyName = null;

    /**
     * EU name of the company
     * @Type("string")
     * @SerializedName("CompanyNameEu")
	 */
    protected $CompanyNameEu = null;

    /**
     * Contact telephone
     * @Type("string")
     * @SerializedName("ContactPhone")
	 */
    protected $ContactPhone = null;

    /**
     * Estimated volume of messages
     * @Type("integer")
     * @SerializedName("EstimatedVolume")
	 */
    protected $EstimatedVolume = null;

    /**
     * ?
     * @Type("string")
     * @SerializedName("Features")
	 */
    protected $Features = null;

    /**
     * Contact person's first name
     * @Type("string")
     * @SerializedName("Firstname")
	 */
    protected $Firstname = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
	 */
    protected $ID = null;

    /**
     * Industry in which user works.
     * @Type("string")
     * @SerializedName("Industry")
	 */
    protected $Industry = null;

    /**
     * Contact person's last name
     * @Type("string")
     * @SerializedName("Lastname")
	 */
    protected $Lastname = null;

    /**
     * Reference to user
     * @Type("integer")
     * @SerializedName("UserID")
	 */
    protected $UserID = null;

    /**
     * Reference to user
     * @Type("string")
     * @SerializedName("UserALT")
	 */
    protected $UserALT = null;

    /**
     * VAT rate for this user.
     * @Type("float")
     * @SerializedName("VAT")
	 */
    protected $VAT = null;

    /**
     * User supplied VAT number.
     * @Type("string")
     * @SerializedName("VATNumber")
	 */
    protected $VATNumber = null;

    /**
     * Status of VAT number checking.
     * @Type("string")
     * @SerializedName("VATNumberStatus")
	 */
    protected $VATNumberStatus = null;

    /**
     * Mailjet determined VAT number
     * @Type("string")
     * @SerializedName("VATNumberTrusted")
	 */
    protected $VATNumberTrusted = null;

    /**
     * URL of user's website
     * @Type("string")
     * @SerializedName("Website")
	 */
    protected $Website = null;

    /**
     * @return mixed
     */
    public function getAddressCity()
    {
        return $this->AddressCity;
    }

    /**
     * @param mixed $AddressCity
     */
    public function setAddressCity($AddressCity)
    {
        $this->AddressCity = $AddressCity;
    }

    /**
     * @return mixed
     */
    public function getAddressCountry()
    {
        return $this->AddressCountry;
    }

    /**
     * @param mixed $AddressCountry
     */
    public function setAddressCountry($AddressCountry)
    {
        $this->AddressCountry = $AddressCountry;
    }

    /**
     * @return mixed
     */
    public function getAddressPostalCode()
    {
        return $this->AddressPostalCode;
    }

    /**
     * @param mixed $AddressPostalCode
     */
    public function setAddressPostalCode($AddressPostalCode)
    {
        $this->AddressPostalCode = $AddressPostalCode;
    }

    /**
     * @return mixed
     */
    public function getAddressStreet()
    {
        return $this->AddressStreet;
    }

    /**
     * @param mixed $AddressStreet
     */
    public function setAddressStreet($AddressStreet)
    {
        $this->AddressStreet = $AddressStreet;
    }

    /**
     * @return mixed
     */
    public function getBillingEmail()
    {
        return $this->BillingEmail;
    }

    /**
     * @param mixed $BillingEmail
     */
    public function setBillingEmail($BillingEmail)
    {
        $this->BillingEmail = $BillingEmail;
    }

    /**
     * @return mixed
     */
    public function getBirthdayAt()
    {
        return $this->BirthdayAt;
    }

    /**
     * @param mixed $BirthdayAt
     */
    public function setBirthdayAt($BirthdayAt)
    {
        $this->BirthdayAt = $BirthdayAt;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param mixed $CompanyName
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }

    /**
     * @return mixed
     */
    public function getCompanyNameEu()
    {
        return $this->CompanyNameEu;
    }

    /**
     * @param mixed $CompanyNameEu
     */
    public function setCompanyNameEu($CompanyNameEu)
    {
        $this->CompanyNameEu = $CompanyNameEu;
    }

    /**
     * @return mixed
     */
    public function getContactPhone()
    {
        return $this->ContactPhone;
    }

    /**
     * @param mixed $ContactPhone
     */
    public function setContactPhone($ContactPhone)
    {
        $this->ContactPhone = $ContactPhone;
    }

    /**
     * @return mixed
     */
    public function getEstimatedVolume()
    {
        return $this->EstimatedVolume;
    }

    /**
     * @param mixed $EstimatedVolume
     */
    public function setEstimatedVolume($EstimatedVolume)
    {
        $this->EstimatedVolume = $EstimatedVolume;
    }

    /**
     * @return mixed
     */
    public function getFeatures()
    {
        return $this->Features;
    }

    /**
     * @param mixed $Features
     */
    public function setFeatures($Features)
    {
        $this->Features = $Features;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->Firstname;
    }

    /**
     * @param mixed $Firstname
     */
    public function setFirstname($Firstname)
    {
        $this->Firstname = $Firstname;
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
    public function getIndustry()
    {
        return $this->Industry;
    }

    /**
     * @param mixed $Industry
     */
    public function setIndustry($Industry)
    {
        $this->Industry = $Industry;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->Lastname;
    }

    /**
     * @param mixed $Lastname
     */
    public function setLastname($Lastname)
    {
        $this->Lastname = $Lastname;
    }

    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->UserID;
    }

    /**
     * @param mixed $UserID
     */
    public function setUserID($UserID)
    {
        $this->UserID = $UserID;
    }

    /**
     * @return mixed
     */
    public function getUserALT()
    {
        return $this->UserALT;
    }

    /**
     * @param mixed $UserALT
     */
    public function setUserALT($UserALT)
    {
        $this->UserALT = $UserALT;
    }

    /**
     * @return mixed
     */
    public function getVAT()
    {
        return $this->VAT;
    }

    /**
     * @param mixed $VAT
     */
    public function setVAT($VAT)
    {
        $this->VAT = $VAT;
    }

    /**
     * @return mixed
     */
    public function getVATNumber()
    {
        return $this->VATNumber;
    }

    /**
     * @param mixed $VATNumber
     */
    public function setVATNumber($VATNumber)
    {
        $this->VATNumber = $VATNumber;
    }

    /**
     * @return mixed
     */
    public function getVATNumberStatus()
    {
        return $this->VATNumberStatus;
    }

    /**
     * @param mixed $VATNumberStatus
     */
    public function setVATNumberStatus($VATNumberStatus)
    {
        $this->VATNumberStatus = $VATNumberStatus;
    }

    /**
     * @return mixed
     */
    public function getVATNumberTrusted()
    {
        return $this->VATNumberTrusted;
    }

    /**
     * @param mixed $VATNumberTrusted
     */
    public function setVATNumberTrusted($VATNumberTrusted)
    {
        $this->VATNumberTrusted = $VATNumberTrusted;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->Website;
    }

    /**
     * @param mixed $Website
     */
    public function setWebsite($Website)
    {
        $this->Website = $Website;
    }
}
