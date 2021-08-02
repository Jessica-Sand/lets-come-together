<?php

namespace ContainerB8dpxV3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RAZCcp9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rAZCcp9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rAZCcp9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'userAdminRepository' => ['privates', 'App\\Repository\\UserAppRepository', 'getUserAppRepositoryService', true],
        ], [
            'userAdminRepository' => 'App\\Repository\\UserAppRepository',
        ]);
    }
}
