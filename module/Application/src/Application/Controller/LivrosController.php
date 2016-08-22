<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Application\Model\Livros;
use Zend\Json\Json;
use JMS\Serializer\Serializer;


class LivrosController extends AbstractRestfulController
{

    private $livrosModel;

    private $serializer;

    public function __construct(Livros $livrosModel, Serializer $serializer)
    {
        $this->livrosModel = $livrosModel;
        $this->serializer = $serializer;
    }

    public function getList()
    {
        $livros = $this->livrosModel->getLivros();
        
        $context = \JMS\Serializer\SerializationContext::create()->enableMaxDepthChecks();
        
        $data = $this->serializer->serialize($livros, 'json');       
        
        $this->getResponse()
            ->getHeaders()
            ->addHeaderLine('Content-type', 'application/json');
        $this->getResponse()->setContent($data);
        return $this->getResponse();
    }

    public function get($id)
    {
        $livro = $this->livrosModel->getLivro($id);
        $context = \JMS\Serializer\SerializationContext::create()->enableMaxDepthChecks();
        
        $data = $this->serializer->serialize($livro, 'json',$context);  
        $this->getResponse()
            ->getHeaders()
            ->addHeaderLine('Content-type', 'application/json');
        $this->getResponse()->setContent($data);
        return $this->getResponse();
    }
}

?>