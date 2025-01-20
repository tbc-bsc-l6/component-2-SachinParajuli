<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Books extends Model{
    use HasFactory;
    protected $table = 'books';

    // protected $fillable = ['title','price'];
    protected $guarded = [];
    
    public function author(){
        return $this->BelongsTo(Author::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
?>