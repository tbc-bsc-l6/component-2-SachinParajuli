<x-layout>
    <x-slot:heading>
        Book
    </x-slot:heading>

    
    <h2 class='font-bold text-lg'>{{ $book['title'] }}</h2>
    <p>
        This book prices {{$book['price']}}.
    </p>
</x-layout>