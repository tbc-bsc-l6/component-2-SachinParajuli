<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationUserController;
use App\Http\Controllers\SessionController;

Route::view('/','home');
Route::view('/about','about');
Route::view('/contact','contact');

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/{book}', [BookController::class, 'show']); 
Route::post('/books', [BookController::class, 'store'])->middleware('auth');

Route::get('/books/{book}/edit', [BookController::class, 'edit'])
    ->middleware('auth')->can('edit-book', 'book');

Route::patch('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);

//AUTH

Route::get('/register', [RegistrationUserController::class, 'create']);
Route::post('/register', [RegistrationUserController::class, 'store']);


Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);