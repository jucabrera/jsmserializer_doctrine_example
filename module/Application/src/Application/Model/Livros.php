<?php
namespace Application\Model;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;


class Livros implements ObjectManagerAwareInterface
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
    
    public function getLivros()
    {
        $livros = $this->getObjectManager()->getRepository('Application\Entity\Livro')->findAll();
        return $livros;
    }
    
    public function getLivro($id)
    {
        $livro = $this->getObjectManager()->getRepository('Application\Entity\Livro')->find($id);
        return $livro;
    }
}

?>