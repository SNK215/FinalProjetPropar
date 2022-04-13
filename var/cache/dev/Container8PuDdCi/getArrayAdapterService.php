<?php

namespace Container8PuDdCi;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArrayAdapterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Omines\DataTablesBundle\Adapter\ArrayAdapter' autowired service.
     *
     * @return \Omines\DataTablesBundle\Adapter\ArrayAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'omines'.\DIRECTORY_SEPARATOR.'datatables-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'omines'.\DIRECTORY_SEPARATOR.'datatables-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'ArrayAdapter.php';

        $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\ArrayAdapter'] = function () use ($container) {
            return new \Omines\DataTablesBundle\Adapter\ArrayAdapter();
        };

        return $container->factories['service_container']['Omines\\DataTablesBundle\\Adapter\\ArrayAdapter']();
    }
}
