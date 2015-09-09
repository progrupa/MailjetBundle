<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class SendEmail
{
    /**
     * @var string
     * @Type("string")
     */
    private $from;
    /**
     * @var string
     * @Type("string")
     */
    private $sender = null;
    /**
     * @var array
     * @Type("array<string>")
     */
    private $to = array();
    /**
     * @var array
     * @Type("array")
     */
    private $cc = array();
    /**
     * @var array
     * @Type("array")
     */
    private $bcc = array();
    /**
     * @var string
     * @Type("string")
     */
    private $subject;
    /**
     * @var string
     * @Type("string")
     */
    private $text = null;
    /**
     * @var string
     * @Type("string")
     */
    private $html = null;
    /**
     * @var array
     * @Type("array")
     */
    private $attachment = null;
    /**
     * @var array
     * @Type("array")
     */
    private $inlineAttachment = null;
    /**
     * @var array
     * @Type("array")
     */
    private $header = null;
    /**
     * @var integer
     * @Type("integer")
     */
    private $mjPrio = 2;
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("mj-campaign")
     */
    private $mjCampaign = null;
    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("mj-deduplicatecampaign")
     */
    private $mjDeduplicateCampaign = null;
    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("mj-trackopen")
     */
    private $mjTrackOpen = null;
    /**
     * @var boolean
     * @Type("boolean")
     * @SerializedName("mj-trackclick")
     */
    private $mjTrackClick = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("mj-customid")
     */
    private $mjCustomId = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("mj-eventpayload")
     */
    private $mjEventPayload = null;

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    public function addTo($to)
    {
        $this->to[] = $to;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param mixed $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    public function addCc($cc)
    {
        $this->cc[] = $cc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @param mixed $bcc
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;
        return $this;
    }

    public function addBcc($bcc)
    {
        $this->bcc[] = $bcc;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param mixed $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param mixed $attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    public function addAttachement($attachment, $name = null)
    {
        if ($name) {
            $this->attachment[$name] = $attachment;
        } else {
            $this->attachment[] = $attachment;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInlineAttachment()
    {
        return $this->inlineAttachment;
    }

    /**
     * @param mixed $inlineAttachment
     */
    public function setInlineAttachment($inlineAttachment)
    {
        $this->inlineAttachment = $inlineAttachment;
        return $this;
    }

    public function addInlineAttachement($inlineAttachment)
    {
        $this->inlineAttachment[] = $inlineAttachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param mixed $header
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjPrio()
    {
        return $this->mjPrio;
    }

    /**
     * @param mixed $mjPrio
     */
    public function setMjPrio($mjPrio)
    {
        $this->mjPrio = $mjPrio;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjCampaign()
    {
        return $this->mjCampaign;
    }

    /**
     * @param mixed $mjCampaign
     */
    public function setMjCampaign($mjCampaign)
    {
        $this->mjCampaign = $mjCampaign;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjDeduplicateCampaign()
    {
        return $this->mjDeduplicateCampaign;
    }

    /**
     * @param mixed $mjDeduplicateCampaign
     */
    public function setMjDeduplicateCampaign($mjDeduplicateCampaign)
    {
        $this->mjDeduplicateCampaign = $mjDeduplicateCampaign;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjTrackOpen()
    {
        return $this->mjTrackOpen;
    }

    /**
     * @param mixed $mjTrackOpen
     */
    public function setMjTrackOpen($mjTrackOpen)
    {
        $this->mjTrackOpen = $mjTrackOpen;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjTrackClick()
    {
        return $this->mjTrackClick;
    }

    /**
     * @param mixed $mjTrackClick
     */
    public function setMjTrackClick($mjTrackClick)
    {
        $this->mjTrackClick = $mjTrackClick;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjCustomId()
    {
        return $this->mjCustomId;
    }

    /**
     * @param mixed $mjCustomId
     */
    public function setMjCustomId($mjCustomId)
    {
        $this->mjCustomId = $mjCustomId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMjEventPayload()
    {
        return $this->mjEventPayload;
    }

    /**
     * @param mixed $mjEventPayload
     */
    public function setMjEventPayload($mjEventPayload)
    {
        $this->mjEventPayload = $mjEventPayload;
        return $this;
    }
}
