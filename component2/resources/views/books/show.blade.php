<x-layout>
    <x-slot:heading>
        Book
    </x-slot:heading>

    <div class=" flex flex-col justify-center items-center p-5">
        <div class=" flex flex-col justify-center items-center  bg-white/60 p-10 rounded border-black border-2 ">

            <div>
    
                <div class='font-bold text-3xl text-center py-2 uppercase'>{{ $book->title }}</div>
                <div>
                    This book prices {{$book->price}}.
                </div>
                <div>
                    The writer is {{$book->author->user->name}}.
                </div>
                <div>
                    The Studio is {{$book->author->name}}.
                </div>
            
            </div>
    
            @can('edit-book', $book)
                <div class='mt-6'>
                    <x-button href='/books/{{ $book->id }}/edit'>Edit this book?</x-button>
                </div>  
                
            @endcan
        </div>
    </div>
    

</x-layout>