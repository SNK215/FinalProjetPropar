<?php

namespace ContainerHYpEQgT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A8hyAs5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A8hyAs5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A8hyAs5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'user' => ['privates', '.errored..service_locator.A8hyAs5.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.A8hyAs5": it references class "App\\Entity\\User" but no such service exists.'],
        ], [
            'encoder' => '?',
            'manager' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}