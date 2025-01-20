<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;

    public function book(){
        return $this->hasMany(Books::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
