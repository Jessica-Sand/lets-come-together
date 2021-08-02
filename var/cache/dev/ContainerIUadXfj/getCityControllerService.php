<?php

namespace ContainerIUadXfj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCityControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CityController' shared autowired service.
     *
     * @return \App\Controller\CityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CityController.php';

        $container->services['App\\Controller\\CityController'] = $instance = new \App\Controller\CityController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\CityController', $container));

        return $instance;
    }
}
