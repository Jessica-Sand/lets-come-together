<?php

namespace ContainerB8dpxV3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInstrumentController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\InstrumentController' shared autowired service.
     *
     * @return \App\Controller\InstrumentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/InstrumentController.php';

        $container->services['App\\Controller\\InstrumentController'] = $instance = new \App\Controller\InstrumentController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\InstrumentController', $container));

        return $instance;
    }
}
