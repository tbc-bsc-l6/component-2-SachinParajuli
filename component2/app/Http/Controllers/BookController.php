<?php

namespace App\Http\Controllers;
use App\Models\Books;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    public function index(){
        return view('books.index',[
            'books' =>  Books::with('author')->latest()->paginate(5)
        ]);
    }

    public function create(){
        return view('books.create');        
    }

    public function show(Books $book){
        return view('books.show', ['book' => $book]);
    }

    public function store(){
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
    }

    public function edit(Books $book){
        return view('books.edit', ['book' => $book]);  
    }

    public function update(Books $book){
        request()->validate([
            'title'=>['required','min:3'],
            'price'=>['required']
        ]);

        $book->update([
            'title'=>request('title'),
            'price'=>request('price')
        ]);
        return redirect('/books/'.$book->id);
    }

    public function destroy(Books $book){
        $book -> delete();
        return redirect('/books');
    }
}
