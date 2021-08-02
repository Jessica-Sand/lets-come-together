<?php

namespace ContainerWH4ZSWG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DwU2MR5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dwU2MR5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dwU2MR5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'instrumentRepository' => ['privates', 'App\\Repository\\InstrumentRepository', 'getInstrumentRepositoryService', true],
            'styleRepository' => ['privates', 'App\\Repository\\StyleRepository', 'getStyleRepositoryService', true],
        ], [
            'instrumentRepository' => 'App\\Repository\\InstrumentRepository',
            'styleRepository' => 'App\\Repository\\StyleRepository',
        ]);
    }
}
