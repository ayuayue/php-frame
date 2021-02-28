<?php


namespace App\Service\Cookie;


class Cookie
{
    protected $path = '/';
    protected $domain;
    protected $secure = false;
    protected $httponly = true;
    public function set($key,$value = null,$minutes = 120)
    {
        $expires = time() + $minutes *60;
        if (is_array($key)){
            foreach ($key as $k => $v){
                setcookie($k,$v,$expires,$this->path,$this->domain,$this->secure,$this->httponly);
            }
        }else{
            setcookie($key,$value,$expires,$this->path,$this->domain,$this->secure,$this->httponly);
        }
    }
    public function has($key)
    {
        return isset($_COOKIE[$key]) && !empty($key);
    }

    public function get($key,$default = null)
    {
        if ($this->has($key)){
            return $_COOKIE[$key];
        }
        if ($default){
            $this->set($key,$default);
            return $default;
        }else{
            return $default;
        }
    }


    public function forever($key,$value)
    {
        $this->set($key,$value,-3600000000);
    }

    public function del(...$key)
    {
        foreach($key as $v){
            $this->set($v);
        }
    }
}