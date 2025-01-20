<x-layout>
    <x-slot:heading>
        Edit the book : {{ $book->title }}
    </x-slot:heading>

    <form method="POST" action="/books/{{$book->id}}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              <div class="sm:col-span-4">
                <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text"
                            name="title"
                            id="title"
                            value="{{$book->title}}"
                            class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="What's the name?">
                  </div>
                  @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                  @enderror
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="price" class="block text-sm/6 font-medium text-gray-900">Price</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text"
                            name="price"
                            id="price"
                            value="{{$book->price}}"
                            class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="What's the price?">
                  </div>
                  @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                  @enderror
                </div>
              </div>

              <div class="sm:col-span-4">
                <label for="price" class="block text-sm/6 font-medium text-gray-900">Category</label>
                <div class="mt-2">
                  <div class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text"
                            name="category"
                            id="category"
                            value="{{$book->category->name}}"
                            class="block min-w-0 grow py-1.5 px-3 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                            placeholder="What's the category?">
                  </div>
                  @error('category')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{$message}}</p>
                  @enderror
                </div>
              </div>


            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete" class="text-red-500 text-sm fold-bold">DELETE</button>
            </div>

            <div class="flex items-center gap-x-6">
                <div>
                    <a href="/books/{{$book->id}}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
        </div>

      </form>

      <form method="POST" action="/books/{{$book->id}}" id="delete" class="hidden">
        @csrf
        @method('DELETE')
      </form>
       
</x-layout> 