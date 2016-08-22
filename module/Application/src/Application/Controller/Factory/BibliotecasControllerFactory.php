<?php
namespace Application\Controller\Factory;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Application\Controller\BibliotecasController;

class BibliotecasControllerFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator){
       $model = $serviceLocator->getServiceLocator()->get("BibliotecasModel");
       $jsmSerializer = $serviceLocator->getServiceLocator()->get('jms_serializer.serializer');
       return new BibliotecasController($model, $jsmSerializer);
    }
}

?>