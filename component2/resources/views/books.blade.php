<x-layout>
    <x-slot:heading>
        Books List
    </x-slot:heading>

    <ul>
        @foreach ($books as $book)
            <li>
                <a href="/books/{{$book['id']}}">
                    <strong>{{$book['title']}}:</strong> Price {{$book['price']}}
                </a>
            </li>  
        @endforeach
    </ul>
</x-layout> 