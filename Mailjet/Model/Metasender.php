<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Metasender Model
 *
 * Definition of send domains authorized to send mails for an API Key
 */
class Metasender extends AbstractModel
{
    public static function getResource()
    {
        return 'metasender';
    }

    /**
     * User provided readable description of the domain
     * @Type("string")
     * @SerializedName("Description")
     */
    protected $Description = null;

    /**
     * The email address (lowercase), which may consist of a wildcard (*) in the local
     * part.
     * @Type("string")
     * @SerializedName("Email")
     */
    protected $Email = null;

    /**
     * Filename expected on the domain name webserver, used for verifying the domain,
     * in case of a catch-all address.
     * @Type("string")
     * @SerializedName("Filename")
     */
    protected $Filename = null;

    /**
     * Is the domain authorized to send mails through Mailjet.
     * @Type("boolean")
     * @SerializedName("IsEnabled")
     */
    protected $IsEnabled = false;

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
    public function getFilename()
    {
        return $this->Filename;
    }

    /**
     * @param mixed $Filename
     */
    public function setFilename($Filename)
    {
        $this->Filename = $Filename;
    }

    /**
     * @return mixed
     */
    public function getIsEnabled()
    {
        return $this->IsEnabled;
    }

    /**
     * @param mixed $IsEnabled
     */
    public function setIsEnabled($IsEnabled)
    {
        $this->IsEnabled = $IsEnabled;
    }
}
