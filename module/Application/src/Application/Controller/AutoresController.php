<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Application\Model\Autores;
use JMS\Serializer\Serializer;

class AutoresController extends AbstractRestfulController
{

    private $model;

    private $serializer;

    public function __construct(Autores $model, Serializer $serializer)
    {
        $this->model = $model;
        $this->serializer = $serializer;
    }    
    
    public function getList()
    {
        $bibliotecas = $this->model->getAutores();
        $context =\JMS\Serializer\SerializationContext::create()->setGroups(["autor"]);
        $data = $this->serializer->serialize($bibliotecas, 'json');
        $this->getResponse()
        ->getHeaders()
        ->addHeaderLine('Content-type', 'application/json');
        $this->getResponse()->setContent($data);
        return $this->getResponse();
    }

    public function get($id)
    {
        $biblioteca = $this->model->getAutor($id);
        $context =\JMS\Serializer\SerializationContext::create()->setGroups(["autor"]);
        $data = $this->serializer->serialize($biblioteca, 'json',$context);
        $this->getResponse()
            ->getHeaders()
            ->addHeaderLine('Content-type', 'application/json');
        $this->getResponse()->setContent($data);
        return $this->getResponse();
    }
}

?>