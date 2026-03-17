<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use Symfony\Component\Serializer\Attribute\SerializedName;


/**
 * An action to test a newsletter.
 */
class NewsletterTest implements ModelInterface
{
    public static function getResource()
    {
        return 'newsletter/{id}/test';
    }

    /**
     * Access rights of this token, in serialized PHP.
     */
    #[SerializedName('Recipients')]
    protected $Recipients = array();

    /**
     * @return mixed
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }

    /**
     * @param mixed $Recipients
     */
    public function setRecipients(array $Recipients)
    {
        $this->Recipients = $Recipients;
    }

    /**
     * @param Recipient $recipient
     * @return NewsletterTest
     */
    public function addRecipient(Recipient $recipient)
    {
        $this->Recipients[] = $recipient;
        return $this;
    }
}
