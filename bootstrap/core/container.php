<?php

$container = new League\Container\Container;

$container->addServiceProvider(new App\Providers\ConfigServiceProvider());
foreach (config('providers') as $provider) {
    $container->addServiceProvider(new $provider);
}
$GLOBALS['container'] = $container;

