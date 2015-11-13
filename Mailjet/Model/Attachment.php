<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;


use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\VirtualProperty;

class Attachment
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
     * @var  string File path
     *@Exclude
     */
    private $file;

    public function __construct($file = null, $fileName = null)
    {
        if ($file) {
            if (!file_exists($file)) {
                throw new \InvalidArgumentException(sprintf('File %s does not exist', $file));
            }
            $this->file = $file;
            $this->contentType = mime_content_type($file);
            $this->filename = $fileName ? : pathinfo($file, PATHINFO_BASENAME);
        }
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
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param string $file
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @VirtualProperty
     * @SerializedName("content")
     */
    public function getContent()
    {
        return base64_encode(file_get_contents($this->file));
    }
}
