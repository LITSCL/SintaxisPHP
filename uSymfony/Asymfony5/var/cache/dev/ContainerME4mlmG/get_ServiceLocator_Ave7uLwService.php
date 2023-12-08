<?php

namespace ContainerME4mlmG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ave7uLwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ave7uLw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ave7uLw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\JuegoController::delete' => ['privates', '.service_locator.XtV2dzD', 'get_ServiceLocator_XtV2dzDService', true],
            'App\\Controller\\JuegoController::findMejorado' => ['privates', '.service_locator.XtV2dzD', 'get_ServiceLocator_XtV2dzDService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\JuegoController:delete' => ['privates', '.service_locator.XtV2dzD', 'get_ServiceLocator_XtV2dzDService', true],
            'App\\Controller\\JuegoController:findMejorado' => ['privates', '.service_locator.XtV2dzD', 'get_ServiceLocator_XtV2dzDService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\JuegoController::delete' => '?',
            'App\\Controller\\JuegoController::findMejorado' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\JuegoController:delete' => '?',
            'App\\Controller\\JuegoController:findMejorado' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}