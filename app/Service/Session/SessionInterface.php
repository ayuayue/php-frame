<?php

namespace App\Service\Session;

interface SessionInterface
{
    public function has($key);

    public function set($key,$value);

    public function get($key,$value);

    public function del(...$key);
}