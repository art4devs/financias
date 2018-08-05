<?php

namespace Financias\Plugins;

use Financias\ServiceContainerInterface;

interface PluginInterface
{
    public function register(ServiceContainerInterface $serviceContainer);
}