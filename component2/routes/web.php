<?php

use Illuminate\Support\Facades\Route;
use App\Models\Books;

Route::get('/', function () {
    return view('home',[
        'greeting' => 'Hellooooo'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/books', function (){
    return view('books',[
        'books' =>  Books::all()
    ]);
}); 

Route::get('/books/{id}', function ($id){
    
    $book = Books::find($id);

    return view('book', ['book' => $book]);
}); 
