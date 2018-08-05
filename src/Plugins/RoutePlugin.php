<?php
declare(strict_types=1);

namespace Financias\Plugins;

use Aura\Router\RouterContainer;
use Financias\ServiceContainerInterface;
use Interop\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;

class RoutePlugin implements PluginInterface
{

    public function register(ServiceContainerInterface $serviceContainer)
    {
        $routerContainer = new RouterContainer();

        // mapeia as rotas
        $map = $routerContainer->getMap();
        // interpreta qual rota seta sendo acessada
        $matcher = $routerContainer->getMatcher();
        // gera a url de acordo com as rotas registradas
        $generator = $routerContainer->getGenerator();
        // pega a request do solicitante
        $request = $this->getRequest();

        // registra os servicos no container base
        $serviceContainer->add('routing', $map);
        $serviceContainer->add('routing.matcher', $matcher);
        $serviceContainer->add('routing.generator', $generator);
        $serviceContainer->add(RequestInterface::class, $request);
        $serviceContainer->addLazy('route', function (ContainerInterface $container) {
            $matcher = $container->get('routing.matcher');
            $request = $container->get(RequestInterface::class);
            return $matcher->match($request);
        });
    }

    protected function getRequest(): RequestInterface
    {

    }
}