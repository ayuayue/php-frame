<?php

if (!function_exists('response')) {
    function response($content = '')
    {
        $response = new Laminas\Diactoros\Response;
        $response->getBody()->write($content);
        return $response;
    }
}
