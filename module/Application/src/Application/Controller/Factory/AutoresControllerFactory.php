<?php
namespace Application\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Application\Controller\AutoresController;

class AutoresControllerFactory implements FactoryInterface{
    
    public function createService(ServiceLocatorInterface $serviceLocator){
       $model = $serviceLocator->getServiceLocator()->get("AutoresModel");
       $jsmSerializer = $serviceLocator->getServiceLocator()->get('jms_serializer.serializer');
       return new AutoresController($model,$jsmSerializer);
    }
}

?>