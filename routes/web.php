<?php

// map a route
$router->get('/', 'App\Controllers\HomeController::index');
$router->get('/home', function ($request) {
    return response('hello home page');
});
