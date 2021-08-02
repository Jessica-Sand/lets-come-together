<?php

namespace ContainerXiEdXjk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_TranslationUpdate_LazyService extends App_KernelProdContainer
{
    /*
     * Gets the private '.console.command.translation_update.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.console.command.translation_update.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('translation:update', [], 'Update the translation file', false, function () use ($container): \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand {
            return ($container->privates['console.command.translation_update'] ?? $container->load('getConsole_Command_TranslationUpdateService'));
        });
    }
}
