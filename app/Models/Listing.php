<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing one',
                'description' => "Long description one"
            ],
            [
                'id' => 2,
                'title' => 'Listing two',
                'description' => "Long description two"
            ]
        ];
    }
}
