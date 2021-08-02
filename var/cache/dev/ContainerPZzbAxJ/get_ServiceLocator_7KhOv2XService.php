<?php

namespace ContainerPZzbAxJ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7KhOv2XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7KhOv2X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7KhOv2X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'channelRepository' => ['privates', 'App\\Repository\\ChannelRepository', 'getChannelRepositoryService', true],
        ], [
            'channelRepository' => 'App\\Repository\\ChannelRepository',
        ]);
    }
}
