<?php
namespace Application\Model;

use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;


class Bibliotecas implements ObjectManagerAwareInterface
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

    
    public function getBiblioteca($id)
    {
        $livro = $this->getObjectManager()->getRepository('Application\Entity\Biblioteca')->find($id);
        return $livro;
    }
}

?>