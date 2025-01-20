<x-layout>
    <x-slot:heading>
        <div class="flex gap-x-[60rem] ">
            <div>
                Books List
            </div>
            <div>
                @auth
                    <x-button href="/books/create">Add a book</x-button>
                @endauth

                @guest
                <x-button href="/login">Login to add</x-button>
                @endguest
            </div>
        </div>
    </x-slot:heading>


    {{-- <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
    </div>
  </header> --}}

    
    <div class="space-y-4">
        @foreach ($books as $book)
            @cannot('edit-book', $book)
                <a href="/books/{{$book['id']}}" class="block px-4 py-6 bg-white/50 border-black border-solid border-2 rounded-lg">
                    <div>
                        <strong class="uppercase font-bold text-2xl">{{$book['title']}}:</strong> Price {{$book['price']}}
                    </div>

                    <div class="font-bold text-sm">
                        {{$book->author->name}}
                    </div>
                </a>
            @endcannot

            @can('edit-book', $book)
                <a href="/books/{{$book['id']}}" class="block px-4 py-6 bg-green-300 border-black border-solid border-2 rounded-lg">
                    <div>
                        <strong class="uppercase font-bold text-2xl" >{{$book['title']}}:</strong> Price {{$book['price']}}
                    </div>

                    <div class="font-bold text-sm">
                        {{$book->author->name}}
                    </div>
                </a>
            @endcan
        @endforeach

        <div class="bg-black/80 shadow-white text-white font-bold px-4 py-2">
            {{ $books->links() }}
        </div>
    </div>

</x-layout> 