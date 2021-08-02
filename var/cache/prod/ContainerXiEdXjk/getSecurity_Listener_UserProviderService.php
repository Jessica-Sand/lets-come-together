<?php

namespace ContainerXiEdXjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Listener_UserProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.listener.user_provider' shared service.
     *
     * @return \Symfony\Component\Security\Http\EventListener\UserProviderListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.listener.user_provider'] = new \Symfony\Component\Security\Http\EventListener\UserProviderListener(new \Symfony\Component\Security\Core\User\ChainUserProvider(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService'));
            yield 1 => ($container->privates['security.user.provider.concrete.app_userapp_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserappProviderService'));
        }, 2)));
    }
}
