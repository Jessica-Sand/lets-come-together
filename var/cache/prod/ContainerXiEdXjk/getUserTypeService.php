<?php

namespace ContainerXiEdXjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Type\UserType' shared autowired service.
     *
     * @return \App\Form\Type\UserType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Type\\UserType'] = new \App\Form\Type\UserType();
    }
}
