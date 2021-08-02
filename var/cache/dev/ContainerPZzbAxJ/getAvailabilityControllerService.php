<?php

namespace ContainerPZzbAxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAvailabilityControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\AvailabilityController' shared autowired service.
     *
     * @return \App\Controller\AvailabilityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/AvailabilityController.php';

        $container->services['App\\Controller\\AvailabilityController'] = $instance = new \App\Controller\AvailabilityController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\AvailabilityController', $container));

        return $instance;
    }
}
