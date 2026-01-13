<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;


use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Serializer\Annotation\Ignore;

class InlineAttachment
{
    /**
     * @SerializedName("Content-type")
     */
    private $contentType;
    /**
     * @SerializedName("Filename")
     */
    private $filename;
    /**
     * @var string
     * @Ignore()
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
     * 
     * @SerializedName("content")
     */
    public function getEncodedContent()
    {
        return base64_encode($this->content);
    }
}
