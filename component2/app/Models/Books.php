<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Books extends Model{
    use HasFactory;
    protected $table = 'Books';

    protected $fillable = ['title','price'];
    
    public function author(){
        return $this->BelongsTo(Author::class);
    }
}




?>