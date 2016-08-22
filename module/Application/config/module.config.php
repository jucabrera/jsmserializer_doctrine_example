<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(           
            'home' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '[/:controller[/:action][/:id]]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',                        
                    ),
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[A-Za-z][A-za-z]+',
                        'id' => '[0-9]+'
                    )
                )
            ), 
            
        ),
    ),
    'service_manager' => array(
        'initializers' => array(
            'Application\Initializer\ObjectManagerInitializer'           
        ),
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'invokables'=>array(
            'LivrosModel'=>'Application\Model\Livros',
            'BibliotecasModel'=>'Application\Model\Bibliotecas',
            'AutoresModel'=>'Application\Model\Autores'
        )
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(        
        'factories'=>array(
            'Application\Controller\Livros' => 'Application\Controller\Factory\LivrosControllerFactory',
            'Application\Controller\Bibliotecas' => 'Application\Controller\Factory\BibliotecasControllerFactory',
            'Application\Controller\Autores' => 'Application\Controller\Factory\AutoresControllerFactory'
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'Application_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => array(
                    __DIR__ . '/../src/Application/Entity'
                )
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'Application_driver'
                )
            )
        )
    )
);
