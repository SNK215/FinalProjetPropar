<?php

namespace ContainerAch9eRQ;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwigStringColumnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Omines\DataTablesBundle\Column\TwigStringColumn' autowired service.
     *
     * @return \Omines\DataTablesBundle\Column\TwigStringColumn
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'omines'.\DIRECTORY_SEPARATOR.'datatables-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Column'.\DIRECTORY_SEPARATOR.'AbstractColumn.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'omines'.\DIRECTORY_SEPARATOR.'datatables-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Column'.\DIRECTORY_SEPARATOR.'TwigColumn.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'omines'.\DIRECTORY_SEPARATOR.'datatables-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Column'.\DIRECTORY_SEPARATOR.'TwigStringColumn.php';

        $container->factories['service_container']['Omines\\DataTablesBundle\\Column\\TwigStringColumn'] = function () use ($container) {
            return new \Omines\DataTablesBundle\Column\TwigStringColumn(($container->services['twig'] ?? $container->getTwigService()));
        };

        return $container->factories['service_container']['Omines\\DataTablesBundle\\Column\\TwigStringColumn']();
    }
}