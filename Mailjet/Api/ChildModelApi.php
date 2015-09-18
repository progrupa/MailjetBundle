<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


use Progrupa\MailjetBundle\Mailjet\Exception\ParentNotDefinedException;
use Progrupa\MailjetBundle\Mailjet\Model\AbstractModel;

class ChildModelApi extends GeneralApi
{
    /** @var  AbstractModel */
    private $parent;

    /**
     * @param AbstractModel $parent
     */
    public function setParent(AbstractModel $parent)
    {
        $this->parent = $parent;
    }

    protected function getResource()
    {
        if (! $this->parent) {
            throw new ParentNotDefinedException("Parent entity udefined for child model {$this->getModel()}");
        }
        $resource = parent::getResource();
        return str_replace('{id}', $this->parent->getID(), $resource);
    }
}
