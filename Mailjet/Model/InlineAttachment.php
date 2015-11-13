<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;


use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\VirtualProperty;

class InlineAttachment
{
    /**
     * @Type("string")
     * @SerializedName("Content-type")
     */
    private $contentType;
    /**
     * @Type("string")
     * @SerializedName("Filename")
     */
    private $filename;
    /**
     * @var string
     * @Exclude()
     */
    private $content;

    public function __construct($filename, $content, $contentType = null)
    {
        $this->filename = $filename;
        $this->content = $content;
        $this->contentType = $contentType;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param mixed $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @VirtualProperty
     * @SerializedName("content")
     */
    public function getEncodedContent()
    {
        return base64_encode($this->content);
    }
}
