<?php
namespace Application\Model;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;


class Autores implements ObjectManagerAwareInterface
{
    protected $objectManager;    
    
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager=$objectManager;
    }
    
    public function getObjectManager()
    {
        return $this->objectManager;
    }
    
    public function getAutores()
    {
        $livros = $this->getObjectManager()->getRepository('Application\Entity\Autor')->findAll();
        return $livros;
    }
    
    public function getAutor($id)
    {
        $livro = $this->getObjectManager()->getRepository('Application\Entity\Autor')->find($id);
        return $livro;
    }
}

?>