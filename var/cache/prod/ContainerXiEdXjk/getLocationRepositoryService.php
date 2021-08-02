<?php

namespace ContainerXiEdXjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocationRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\LocationRepository' shared autowired service.
     *
     * @return \App\Repository\LocationRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\LocationRepository'] = new \App\Repository\LocationRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
