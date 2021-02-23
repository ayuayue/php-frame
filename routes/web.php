<?php

// map a route
$router->get('/', function ($request)  {
    $name = 'caoayu';
    return view('index.twig',compact('name'));
});
$router->get('/home', function ($request) {

    return response('hello home page');
});
