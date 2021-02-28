<?php

namespace App\Controllers;

use App\Models\User;

class HomeController
{
    public function index($request)
    {
//        $table = new Tables();
//        dump($table->createUser());
//        $user = app('db')::table('users')->insert([
//            'name' => 'lihua',
//            'email' => '123',
//            'password' => '123456'
//        ]);
        dump(app('db')::table('users')->get());
        return view('index.twig', compact('user'));
    }
}