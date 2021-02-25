<?php

namespace App\Controllers;

class HomeController
{
    public function index($request)
    {
        $name = config('name');
        return view('index.twig', compact('name'));
    }
}