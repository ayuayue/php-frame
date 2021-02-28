<?php

namespace App\Controllers;

use App\Models\Person;

class HomeController
{
    public function index($request)
    {
//        cookie()->set([
//            'name'=>'1',
//            'a'=>1
//        ]);
        cookie()->del('a','name','age');
        $user = 123;
//        $user = Person::find(1);
        return view('index.twig', compact('user'));
    }
}