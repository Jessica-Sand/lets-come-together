<?php

namespace ContainerNhLk1mM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4eDQUrYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4eDQUrY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4eDQUrY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'user' => ['privates', '.errored..service_locator.4eDQUrY.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.4eDQUrY": it references class "App\\Entity\\User" but no such service exists.'],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'serializer' => '?',
            'user' => 'App\\Entity\\User',
            'validator' => '?',
        ]);
    }
}
