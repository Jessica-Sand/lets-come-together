<?php

namespace ContainerNhLk1mM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AzMdSSyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.azMdSSy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.azMdSSy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'genderRepository' => ['privates', 'App\\Repository\\GenderRepository', 'getGenderRepositoryService', true],
        ], [
            'genderRepository' => 'App\\Repository\\GenderRepository',
        ]);
    }
}
