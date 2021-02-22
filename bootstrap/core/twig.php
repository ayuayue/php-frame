<?php

$view_path = __DIR__ . '/../../resources/views';
$cache_path = __DIR__ . '/../../storage/views';

$loader = new \Twig\Loader\FilesystemLoader($view_path);

$twig = new \Twig\Environment($loader, [
    'cache' => $cache_path,
]);

dump($twig->render('index.twig', ['name' => 'Caoayu']));