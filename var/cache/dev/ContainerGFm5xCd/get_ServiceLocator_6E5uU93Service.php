<?php

namespace ContainerGFm5xCd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6E5uU93Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6E5uU93' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6E5uU93'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.6E5uU93.App\\Entity\\UserApp', NULL, 'Cannot autowire service ".service_locator.6E5uU93": it references class "App\\Entity\\UserApp" but no such service exists.'],
        ], [
            'user' => 'App\\Entity\\UserApp',
        ]);
    }
}
