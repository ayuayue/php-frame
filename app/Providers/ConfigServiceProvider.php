<?php

namespace App\Providers;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Noodlehaus\Config;
class ConfigServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'config'
    ];

    public function register()
    {
        $container = $this->getContainer();
        $container->add('config',new Config(base_path('config')));
    }
}