<?php
namespace Application\Controller\Factory;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Application\Controller\LivrosController;

class LivrosControllerFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator){
       $livrosModel = $serviceLocator->getServiceLocator()->get("LivrosModel");
       $jsmSerializer = $serviceLocator->getServiceLocator()->get('jms_serializer.serializer');
       return new LivrosController($livrosModel,$jsmSerializer);
    }
}

?>