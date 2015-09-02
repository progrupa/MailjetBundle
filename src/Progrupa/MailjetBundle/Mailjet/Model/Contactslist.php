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

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Contactslist Model
 *
 * API key contact lists
 */
class Contactslist extends AbstractModel
{

    /**
     * Email address at which this contacts of this list can be reached.
     * @Type("string")
     * @SerializedName("Address")
     */
    protected $Address = null;

    /**
     * Has this list been deleted or not.
     * @Type("boolean")
     * @SerializedName("IsDeleted")
     */
    protected $IsDeleted = false;

    /**
     * User-specified name for this contact list (must be unique)
     * @Type("string")
     * @SerializedName("Name")
     */
    protected $Name = null;

    /**
     * Number of subscribers for this list.
     * @Type("integer")
     * @SerializedName("SubscriberCount")
     */
    protected $SubscriberCount = null;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param mixed $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return mixed
     */
    public function getIsDeleted()
    {
        return $this->IsDeleted;
    }

    /**
     * @param mixed $IsDeleted
     */
    public function setIsDeleted($IsDeleted)
    {
        $this->IsDeleted = $IsDeleted;
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
    public function getSubscriberCount()
    {
        return $this->SubscriberCount;
    }

    /**
     * @param mixed $SubscriberCount
     */
    public function setSubscriberCount($SubscriberCount)
    {
        $this->SubscriberCount = $SubscriberCount;
    }
}

