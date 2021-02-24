<?php

namespace App\Controllers;

class HomeController
{
    public function index($request)
    {
        $name = 'caoayu';
        return view('index.twig', compact('name'));
    }
}