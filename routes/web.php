<?php

// map a route
$router->get('/', function ($request) {
    return response('hello world');
});
$router->get('/home', function ($request) {

    return response('hello home page');
});
