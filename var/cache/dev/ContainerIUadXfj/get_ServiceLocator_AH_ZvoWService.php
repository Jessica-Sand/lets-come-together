<?php

namespace ContainerIUadXfj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AH_ZvoWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aH.zvoW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aH.zvoW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'availabilityRepository' => ['privates', 'App\\Repository\\AvailabilityRepository', 'getAvailabilityRepositoryService', true],
        ], [
            'availabilityRepository' => 'App\\Repository\\AvailabilityRepository',
        ]);
    }
}
