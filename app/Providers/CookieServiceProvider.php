<?php


namespace App\Providers;


use App\Service\Cookie\Cookie;
use League\Container\ServiceProvider\AbstractServiceProvider;

class CookieServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'cookie'
    ];
    public function register()
    {
        $container = $this->getContainer();
        $container->add('cookie',function(){
           return new Cookie();
        });
    }
}