<x-layout>
    <x-slot:heading>
        Books List
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($books as $book)
            <a href="/books/{{$book['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div>
                    <strong>{{$book['title']}}:</strong> Price {{$book['price']}}
                </div>

                <div class="font-bold text-purple-300 text-sm">
                    {{$book->author->name}}
                </div>
            </a>
        @endforeach

        <div>
            {{ $books->links() }}
        </div>
    </div>

</x-layout> 