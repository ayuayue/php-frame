<?php
if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key,true)?:getenv($key);
        switch ($value) {
            case "true":
                return true;
            case "false":
                return false;
            case "":
                return $default;
            case "null":
                return null;
            default :
                $valueLength = strlen($value);
                if (strlen($value) > 1 && $value[0] === '"' && $value[$valueLength - 1] === '"') {
                    return substr($value, 1, -1);
                }
                return $value;
        }

    }
}
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
if (!function_exists('base_path')) {
    function base_path($path = '')
    {
        return __DIR__ . ($path ? DIRECTORY_SEPARATOR . $path : '');
    }
}
if (!function_exists('public_path')) {
    function public_path($path = '')
    {
        return base_path('public') . ($path ? DIRECTORY_SEPARATOR . $path : '');
    }
}
if (!function_exists('storage_path')) {
    function storage_path($path = '')
    {
        return base_path('storage') . ($path ? DIRECTORY_SEPARATOR . $path : '');
    }
}
if (!function_exists('config')) {
    function config($key = '')
    {
        return app('config')->get($key);
    }
}
