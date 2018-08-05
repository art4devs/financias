<?php

namespace Financias\Plugins;

use Aura\Router\RouterContainer;
use Financias\ServiceContainerInterface;

class RoutePlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $serviceContainer)
    {
        $routerContainer = new RouterContainer();

        // mapeia as rotas
        $map       = $routerContainer->getMap();
        // interpreta qual rota seta sendo acessada
        $matcher   = $routerContainer->getMatcher();
        // gera a url de acordo com as rotas registradas
        $generator = $routerContainer->getGenerator();
        // registra os servicos no container base
        $serviceContainer->add('routing', $map);
        $serviceContainer->add('routing.matcher', $matcher);
        $serviceContainer->add('routing.generator', $generator);
    }
}