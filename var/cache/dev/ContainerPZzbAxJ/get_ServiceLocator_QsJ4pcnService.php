<?php

namespace ContainerPZzbAxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QsJ4pcnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QsJ4pcn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QsJ4pcn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'style' => ['privates', '.errored..service_locator.QsJ4pcn.App\\Entity\\Style', NULL, 'Cannot autowire service ".service_locator.QsJ4pcn": it references class "App\\Entity\\Style" but no such service exists.'],
        ], [
            'style' => 'App\\Entity\\Style',
        ]);
    }
}