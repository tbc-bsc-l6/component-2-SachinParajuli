<?php

use App\Models\Author;
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

//INDEX
Route::get('/books', function (){
    return view('books.index',[
        'books' =>  Books::with('author')->latest()->paginate(5)
    ]);
});

//CREATE
Route::get('/books/create', function () {
    return view('books.create');
});

//SHOW
Route::get('/books/{id}', function ($id){
    $book = Books::find($id);
    return view('books.show', ['book' => $book]);
}); 

//STORE
Route::post('/books', function(){
    request()->validate([
        'title'=>['required','min:3'],
        'price'=>['required']
    ]);

    Books::create([
        'title' => request('title'),
        'price' => request('price'),
        'author_id' => 1
    ]);

    return redirect('/books');
});

//EDIT
Route::get('/books/{id}/edit', function ($id){
    $book = Books::find($id);
    return view('books.edit', ['book' => $book]);
});

//UPDATE
Route::patch('/books/{id}', function ($id){
    //validate
    request()->validate([
        'title'=>['required','min:3'],
        'price'=>['required']
    ]);
    
    $book = Books::findOrFail($id);
    $book->update([
        'title'=>request('title'),
        'price'=>request('price')
    ]);
    return redirect('/books/'.$book->id);
});

//DELETE
Route::delete('/books/{id}', function ($id){
    $book = Books::findOrFail($id);
    $book -> delete();

    return redirect('/books');
});