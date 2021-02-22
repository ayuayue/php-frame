<?php

namespace App\Providers;

use App\Service\Alarm;
use League\Container\ServiceProvider\AbstractServiceProvider;

class AppServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'alarm'
    ];
    public function register()
    {
        $this->getContainer()->add('alarm', new Alarm());
    }
}
