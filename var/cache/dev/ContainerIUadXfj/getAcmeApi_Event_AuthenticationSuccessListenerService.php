<?php

namespace ContainerIUadXfj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAcmeApi_Event_AuthenticationSuccessListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'acme_api.event.authentication_success_listener' shared autowired service.
     *
     * @return \App\EventListener\AuthenticationSuccessListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/EventListener/AuthenticationSuccessListener.php';

        return $container->privates['acme_api.event.authentication_success_listener'] = new \App\EventListener\AuthenticationSuccessListener(($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));
    }
}
