<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;
use Symfony\Component\Serializer\Attribute\Ignore;


/**
 * 
 */
class SendEmail
{
    #[SerializedName('FromName')]
    private $fromName = null;
    #[SerializedName('FromEmail')]
    private $fromEmail = null;
    #[SerializedName('Sender')]
    private $sender = null;
    #[SerializedName('Recipients')]
    private $recipients = null;
    #[SerializedName('To')]
    private $to = null;
    #[SerializedName('Cc')]
    private $cc = null;
    #[SerializedName('Bcc')]
    private $bcc = null;
    #[SerializedName('Subject')]
    private $subject = null;
    #[SerializedName('Text-part')]
    private $text = null;
    #[SerializedName('Html-part')]
    private $html = null;
    #[SerializedName('Attachments')]
    private $attachments = null;
    #[SerializedName('Inline-attachments')]
    private $inlineAttachments = null;
    #[SerializedName('Headers')]
    private $headers = null;
    #[SerializedName('Vars')]
    private $vars = null;
    #[SerializedName('Mj-prio')]
    private $mjPrio = 2;
    #[SerializedName('Mj-campaign')]
    private $mjCampaign = null;
    #[SerializedName('Mj-deduplicatecampaign')]
    private $mjDeduplicateCampaign = null;
    #[SerializedName('Mj-trackopen')]
    private $mjTrackOpen = null;
    #[SerializedName('Mj-trackclick')]
    private $mjTrackClick = null;
    #[SerializedName('Mj-customid')]
    private $mjCustomId = null;
    #[SerializedName('Mj-eventpayload')]
    private $mjEventPayload = null;

    /**
     * @return mixed
     */
    public function getFromName()
    {
        return $this->fromName;
    }

    /**
     * @param mixed $fromName
     */
    public function setFromName($fromName)
    {
        $this->fromName = $fromName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFromEmail()
    {
        return $this->fromEmail;
    }

    /**
     * @param mixed $fromEmail
     */
    public function setFromEmail($fromEmail)
    {
        $this->fromEmail = $fromEmail;
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
    public function getRecipients()
    {
        return $this->recipients;
    }

    /**
     * @param mixed $recipients
     */
    public function setRecipients($recipients)
    {
        $this->recipients = $recipients;
        return $this;
    }

    /**
     * @param Recipient $recipient
     * @return $this
     */
    public function addRecipient(Recipient $recipient)
    {
        if (! $this->recipients) {
            $this->recipients = array();
        }
        $this->recipients[] = $recipient;
        return $this;
    }

    /**
     * @param string $recipient
     * @return $this
     */
    public function addRecipientEmail($recipient)
    {
        if (! $this->recipients) {
            $this->recipients = array();
        }
        $this->recipients[] = new Recipient($recipient);
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
        if (! $this->to) {
            $this->to = array();
        }
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
        if (! $this->cc) {
            $this->cc = array();
        }
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
        if (! $this->bcc) {
            $this->bcc = array();
        }
        $this->bcc[] = $bcc;
        return $this;
    }

    /**
     * @param string $replyTo
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->addHeader('Reply-to', $replyTo);
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
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param mixed $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    public function addAttachment(Attachment $attachment)
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInlineAttachments()
    {
        return $this->inlineAttachments;
    }

    /**
     * @param mixed $inlineAttachments
     */
    public function setInlineAttachments($inlineAttachments)
    {
        $this->inlineAttachments = $inlineAttachments;
        return $this;
    }

    public function addInlineAttachment(InlineAttachment $inlineAttachment)
    {
        $this->inlineAttachments[] = $inlineAttachment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param mixed $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function addHeader($name, $value)
    {
        if (! $this->headers) {
            $this->headers = array();
        }
        $this->headers[$name] = $value;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param mixed $vars
     */
    public function setVars($vars)
    {
        $this->vars = $vars;
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
