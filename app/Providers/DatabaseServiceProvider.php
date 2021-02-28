<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class DatabaseServiceProvider extends AbstractServiceProvider
{
    public $provides = [
        'db'
    ];

    public function register()
    {
        $container = $this->getContainer();
        $container->add('db', function (){
            $database = config('database.mysql');
            $capsule = new Capsule();
            $capsule->setEventDispatcher(new Dispatcher(new Container));
            $capsule->addConnection($database);
            $capsule->setAsGlobal();
            $capsule->bootEloquent();
            return $capsule;
        });
    }

    public function illuminate()
    {
        $database = config('database.mysql');
        $capsule = new Capsule();
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->addConnection($database);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        return $capsule;
    }
    
}