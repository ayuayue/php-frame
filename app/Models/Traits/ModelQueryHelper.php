<?php

namespace App\Models\Traits;

trait ModelQueryHelper
{
    public static function find($id)
    {
        $db = app('db');
        return $db->getRepository(self::class)->find($id);
    }
}