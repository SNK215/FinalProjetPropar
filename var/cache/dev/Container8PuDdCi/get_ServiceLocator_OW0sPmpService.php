<?php

namespace Container8PuDdCi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OW0sPmpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OW0sPmp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OW0sPmp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\OperationRepository', 'getOperationRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\OperationRepository',
        ]);
    }
}