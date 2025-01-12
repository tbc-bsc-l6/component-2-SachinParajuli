<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Books{
    public static function all() : array
    {
        return [
            [
                'id' => 1,
                'title' => 'One Piece',
                'price' => '$300'
            ],
            [
                'id' => 2,
                'title' => 'Naruto',
                'price' => '$270' 
            ],
            [
                'id' => 3,
                'title' => 'Bleach',
                'price' => '$240'
            ]
        ];
    }

    public static function find(int $id) : array
    {
        $book = Arr::first(static::all(), fn($book) => $book['id'] == $id);

        if(!$book){
            abort(404, "The book you're searching isnt available");
        }

    }
}




?>