<?php

use Financias\Application;
use Financias\Plugins\RoutePlugin;
use Financias\ServiceContainer;

require_once __DIR__ . '/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app              = new Application($serviceContainer);

$app->plugin(new RoutePlugin());

$app->get('/', function () {
    echo 'Olar!';
});

$app->start();