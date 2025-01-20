<x-layout>
    <x-slot:heading>
        Book
    </x-slot:heading>

    
    <h2 class='font-bold text-lg'>{{ $book->title }}</h2>
    <p>
        This book prices {{$book->price}}.
    </p>

    @can('edit-book', $book)
        <p class='mt-6'>
            <x-button href='/books/{{ $book->id }}/edit'>Edit this book?</x-button>
        </p>  
        
    @endcan

</x-layout>