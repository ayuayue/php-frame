<?php


namespace App\Models;


class Tables
{
    public function createUser()
    {
        app('db')::schema()->create('users',function ($table){
            $table->increments('id');
            $table->string('name', 50)->nullable($value = false);
            $table->string('email',50)->nullable($value = false);
            $table->string('password',50)->nullable($value = false);
        });
    }
}