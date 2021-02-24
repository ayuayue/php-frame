<?php

namespace App\Controllers;

class HomeController
{
    public function index($request)
    {
        $name = app('config')->get('name');
        return view('index.twig', compact('name'));
    }
}