<?php

if (!function_exists('response')) {
    function response($content = '')
    {
        $response = new Laminas\Diactoros\Response;
        $response->getBody()->write($content);
        return $response;
    }
}
if (!function_exists('app')) {
    function app($server = null)
    {
        $container = $GLOBALS['container'];
        if ($server) {
            return $container->get($server);
        }

        return $container;

    }
}
if (!function_exists('view')) {
    function view($tql, $data)
    {
        $twig = app('twig');
        $content = $twig->render($tql, $data);
        return response($content);

    }
}
