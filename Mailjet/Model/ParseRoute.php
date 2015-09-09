<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ParseRoute implements ModelInterface
{
    public static function getResource()
    {
        return 'parseroute';
    }

    /**
     * Reference to API Key to which this token belongs.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $APIKeyID = null;

    /**
     * Reference to API Key to which this token belongs.
     * @Type("string")
     * @SerializedName("APIKeyALT")
     */
    protected $APIKeyALT = null;

    /**
     * Reference to API Key to which this token belongs.
     * @Type("string")
     * @SerializedName("Email")
     */
    protected $Email = null;

    /**
     * User readable name for this API Key
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * User readable name for this API Key
     * @Type("string")
     * @SerializedName("Url")
     */
    protected $Url = null;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
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
