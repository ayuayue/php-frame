<?php


namespace App\Providers;


use App\Service\Session\FileSession;
use League\Container\ServiceProvider\AbstractServiceProvider;

class SessionServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'session'
    ];
    public function register()
    {
        $container = $this->getContainer();
        $container->add('session',function(){
            return new FileSession();
        });
    }
}