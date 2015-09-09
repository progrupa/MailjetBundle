<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * An action to upload the content of the newsletter
 */
class NewsletterDetailContent implements ModelInterface
{
    public static function getResource()
    {
        return 'newsletter/{id}/detailcontent';
    }

    /**
     * The html-formatted part of the message
     * @Type("string")
     * @SerializedName("Html-part")
     */
    protected $HtmlPart = null;

    /**
     *  The plain text part of the message
     * @Type("string")
     * @SerializedName("Text-part")
     */
    protected $TextPart  = null;

    /**
     * @return mixed
     */
    public function getHtmlPart()
    {
        return $this->HtmlPart;
    }

    /**
     * @param mixed $HtmlPart
     */
    public function setHtmlPart($HtmlPart)
    {
        $this->HtmlPart = $HtmlPart;
    }

    /**
     * @return mixed
     */
    public function getTextPart()
    {
        return $this->TextPart;
    }

    /**
     * @param mixed $TextPart
     */
    public function setTextPart($TextPart)
    {
        $this->TextPart = $TextPart;
    }
}
