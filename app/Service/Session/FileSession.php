<?php


namespace App\Service\Session;


class FileSession implements SessionInterface
{

    public function has($key)
    {
        return isset($_SESSION[$key]) && !empty($key);
    }

    public function set($key, $value = null)
    {
        if(is_array($key)){
            foreach ($key as $k=>$v){
                $_SESSION[$k] = $v;
            }
        }else{
            $_SESSION[$key] = $value;
        }
    }

    public function get($key, $default = null)
    {
        if ($this->has($key)){
            return $_SESSION[$key];
        }
        if ($default != null){
            $_SESSION[$key] = $default;
            return $default;
        }else{
            return $default;
        }
    }

    public function del(...$key)
    {
        foreach($key as $v){
            unset($_SESSION[$v]);
        }
    }
}