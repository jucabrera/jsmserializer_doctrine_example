<?php
namespace Application\Initializer;

use Zend\ServiceManager\InitializerInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;

class ObjectManagerInitializer implements InitializerInterface
{
    public function initialize($instance, ServiceLocatorInterface $serviceLocator)
    {
        try{
            if ($instance instanceof ObjectManagerAwareInterface) {
                $objectManager = $serviceLocator->get('Doctrine\ORM\EntityManager');
                $instance->setObjectManager($objectManager);
            }
        }catch (\Exception $err){
            return true;
        }
    }
}

?>