<?php

try {
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(base_path());
    $dotenv->load();
}catch (\Dotenv\Exception\InvalidPathException $exception){
    dump('env path invaild');
}

