<?php

return [
    'name' => env('APP_NAME','XXXX'),
    'test' => 'app',
    'debug' => env('APP_DEBUG',false),
    'providers' => [
        App\Providers\AppServiceProvider::class,
        App\Providers\ViewServiceProvider::class,
        App\Providers\DatabaseServiceProvider::class,
        App\Providers\SessionServiceProvider::class,
        App\Providers\CookieServiceProvider::class,
    ]
];
