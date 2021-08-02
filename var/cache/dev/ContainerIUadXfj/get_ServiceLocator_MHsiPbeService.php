<?php

namespace ContainerIUadXfj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MHsiPbeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MHsiPbe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MHsiPbe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'departmentRepository' => ['privates', 'App\\Repository\\DepartmentRepository', 'getDepartmentRepositoryService', true],
        ], [
            'departmentRepository' => 'App\\Repository\\DepartmentRepository',
        ]);
    }
}
