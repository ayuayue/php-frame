<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $viewPath;
    protected $cachePath;
    protected $provides = [
        'twig'
    ];

    public function __construct()
    {
        $this->viewPath = base_path('resources/views');
        $this->cachePath = base_path('storage/views');
    }

    public function register()
    {
        $container = $this->getContainer();
        $container->add('twig', function () {
            $loader = new \Twig\Loader\FilesystemLoader($this->viewPath);

            $twig = new \Twig\Environment($loader, [
                'cache' => config('twig.cache_enable') ? $this->cachePath : false,
            ]);
            return $twig;
        });
    }
}