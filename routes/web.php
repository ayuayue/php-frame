<?php

// map a route
$router->get('/', function ($request) {

    $view_path = __DIR__ . '/../resources/views';

    $loader = new \Twig\Loader\FilesystemLoader($view_path);

    $twig = new \Twig\Environment($loader, [
        'cache' => __DIR__ . '/../../storage/views',
    ]);

    $content = $twig->render('index.twig', ['name' => 'Caoayu']);
    return response($content);
});
$router->get('/home', function ($request) {

    return response('hello home page');
});
