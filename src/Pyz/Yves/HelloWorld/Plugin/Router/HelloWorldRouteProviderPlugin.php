<?php

namespace Pyz\Yves\HelloWorld\Plugin\Router;

use Spryker\Yves\Router\Plugin\RouteProvider\AbstractRouteProviderPlugin;
use Spryker\Yves\Router\Route\RouteCollection;

class HelloWorldRouteProviderPlugin extends AbstractRouteProviderPlugin
{
    private const ROUTE_HELLO_WORLD_INDEX = 'hello-world-index';

    /**
     * @param RouteCollection $routeCollection
     * @return RouteCollection
     */
    public function addRoutes(RouteCollection $routeCollection): RouteCollection
    {
        $routeCollection->add(
            static::ROUTE_HELLO_WORLD_INDEX,
            $this->buildRoute('/hello-world', 'HelloWorld', 'Index', 'indexAction')
        );

        return $routeCollection;
    }
}
