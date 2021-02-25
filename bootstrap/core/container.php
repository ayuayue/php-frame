<?php

$container = new League\Container\Container;

$container->addServiceProvider(new App\Providers\ConfigServiceProvider());

$GLOBALS['container'] = $container;

foreach(config('providers') as $provider){
    $container->addServiceProvider($provider);
}