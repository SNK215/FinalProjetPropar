<?php

namespace ContainerInAWb4j;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VL5fXOOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vL5fXOO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vL5fXOO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'user' => ['privates', '.errored..service_locator.vL5fXOO.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.vL5fXOO": it references class "App\\Entity\\User" but no such service exists.'],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
