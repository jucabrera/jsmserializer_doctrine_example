<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use JMS\Serializer\Serializer;
use Application\Model\Bibliotecas;

class BibliotecasController extends AbstractRestfulController
{

    private $model;

    private $serializer;

    public function __construct(Bibliotecas $model, Serializer $serializer)
    {
        $this->model = $model;
        $this->serializer = $serializer;
    }

    public function get($id)
    {
        $biblioteca = $this->model->getBiblioteca($id);
        $data = $this->serializer->serialize($biblioteca, 'json');
        $this->getResponse()
            ->getHeaders()
            ->addHeaderLine('Content-type', 'application/json');
        $this->getResponse()->setContent($data);
        return $this->getResponse();
    }
}

?>