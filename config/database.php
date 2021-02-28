<?php
return [
    'database' => [
        'mysql' => [
            'driver' => env("DB_CONNECTION",'mysql'),
            'host' => env("DB_HOST",'127.0.0.1'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ]
    ]
];
