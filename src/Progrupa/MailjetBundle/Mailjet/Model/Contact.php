<?php
/**
 * MailJet Model
 *
 * Copyright (c) 2013, Mailjet.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *     * Redistributions in binary form must reproduce the above copyright notice,
 *       this list of conditions and the following disclaimer in the documentation
 *       and/or other materials provided with the distribution.
 *
 *     * Neither the name of Zend Technologies USA, Inc. nor the names of its
 *       contributors may be used to endorse or promote products derived from this
 *       software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 * WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
 * ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
 * (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
 * SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */


namespace Progrupa\MailjetBundle\Mailjet\Model;

use \Datetime;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Contact Model
 *
 * API Key contacts (email addresses)
 */
class Contact extends AbstractModel
{
    /**
     * Number of messages delivered to this contact.
     * @Type("integer")
     * @SerializedName("DeliveredCount")
     */
    protected $DeliveredCount = null;

    /**
     * Email address of this contact
     * @Type("string")
     * @SerializedName("Email")
     */
    protected $Email = null;

    /**
     * Is an opt-in for a contactslist subscription pending ?
     * @Type("boolean")
     * @SerializedName("IsOptInPending")
     */
    protected $IsOptInPending = false;

    /**
     * Is this contact complaining of spam ?
     * @Type("boolean")
     * @SerializedName("IsSpamComplaining")
     */
    protected $IsSpamComplaining = false;

    /**
     * Timestamp of last registered activity for this contact
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("LastActivityAt")
     */
    protected $LastActivityAt = null;

    /**
     * Timestamp of last update of this contact
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("LastUpdateAt")
     */
    protected $LastUpdateAt = null;

    /**
     * User-provided name for this contact
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Timestamp of last unsubscribe request.
     * @Type("DateTime<'Y-m-d\TH:i:sP'>")
     * @SerializedName("UnsubscribedAt")
     */
    protected $UnsubscribedAt = null;

    /**
     * Description of who initiated the unsubscribe request.
     * @Type("string")
     * @SerializedName("UnsubscribedBy")
     */
    protected $UnsubscribedBy = null;

    /**
     * @return mixed
     */
    public function getDeliveredCount()
    {
        return $this->DeliveredCount;
    }

    /**
     * @param mixed $DeliveredCount
     */
    public function setDeliveredCount($DeliveredCount)
    {
        $this->DeliveredCount = $DeliveredCount;
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
    public function getIsOptInPending()
    {
        return $this->IsOptInPending;
    }

    /**
     * @param mixed $IsOptInPending
     */
    public function setIsOptInPending($IsOptInPending)
    {
        $this->IsOptInPending = $IsOptInPending;
    }

    /**
     * @return mixed
     */
    public function getIsSpamComplaining()
    {
        return $this->IsSpamComplaining;
    }

    /**
     * @param mixed $IsSpamComplaining
     */
    public function setIsSpamComplaining($IsSpamComplaining)
    {
        $this->IsSpamComplaining = $IsSpamComplaining;
    }

    /**
     * @return mixed
     */
    public function getLastActivityAt()
    {
        return $this->LastActivityAt;
    }

    /**
     * @param mixed $LastActivityAt
     */
    public function setLastActivityAt($LastActivityAt)
    {
        $this->LastActivityAt = $LastActivityAt;
    }

    /**
     * @return mixed
     */
    public function getLastUpdateAt()
    {
        return $this->LastUpdateAt;
    }

    /**
     * @param mixed $LastUpdateAt
     */
    public function setLastUpdateAt($LastUpdateAt)
    {
        $this->LastUpdateAt = $LastUpdateAt;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param mixed $Name
     */
    public function setName($Name)
    {
        $this->Name = $Name;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribedAt()
    {
        return $this->UnsubscribedAt;
    }

    /**
     * @param mixed $UnsubscribedAt
     */
    public function setUnsubscribedAt($UnsubscribedAt)
    {
        $this->UnsubscribedAt = $UnsubscribedAt;
    }

    /**
     * @return mixed
     */
    public function getUnsubscribedBy()
    {
        return $this->UnsubscribedBy;
    }

    /**
     * @param mixed $UnsubscribedBy
     */
    public function setUnsubscribedBy($UnsubscribedBy)
    {
        $this->UnsubscribedBy = $UnsubscribedBy;
    }
}

