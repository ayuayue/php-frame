<?php

$container = new League\Container\Container;

$container->addServiceProvider(new App\Providers\AppServiceProvider());
$container->addServiceProvider(new App\Providers\ViewServiceProvider());

$GLOBALS['container'] = $container;
