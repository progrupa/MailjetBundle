<?php

namespace Progrupa\MailjetBundle\Mailjet\Api;


use Progrupa\MailjetBundle\Mailjet\Model\ModelInterface;

class GeneralApi extends AbstractApi
{
    /** @var  ModelInterface */
    protected $model;

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string Resource name on the endpoint
     */
    protected function getResource()
    {
        $class = $this->model;

        return $class::getResource();
    }

}
