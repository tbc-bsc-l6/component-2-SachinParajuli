<x-layout>
    <x-slot:heading>
        Add a Book
    </x-slot:heading>

    <div class="flex justify-center item-center p-3">

      <form method="POST" action="/books" class="flex flex-col justify-center items-center  bg-white/60 p-4 rounded border-black border-2 ">
          @csrf
          <div class="space-y-4">
            <div class="border-b border-gray-900/10 pb-12">
              <div class=" text-gray-900 text-center uppercase font-bold text-2xl">Fill below</div>
              <div class="mt-1 text-sm/6 text-gray-600 text-center">Please add a new book to the store.</div>
        
              <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
  
                <x-form-field>
                  <x-form-label for="title">Title</x-form-label>
                  <div class="mt-2 bg-black/70 rounded p-2">
                    <x-form-input type="text" name="title" id="title" placeholder="What's the name???"/>
                    <x-form-error name='title' />
                  </div>
                </x-form-field>
  
                <x-form-field>
                  <x-form-label for="price">Price</x-form-label>
                  <div class="mt-2 bg-black/70 rounded p-2">
                    <x-form-input type="text" name="price" id="price" placeholder="What's the price???"/>
                    <x-form-error name='price' />
                  </div>
                </x-form-field>
  
                <x-form-field>
                  <x-form-label for="category">Category</x-form-label>
                  <div class="mt-2 bg-black/70 rounded p-2">
                    <x-form-input type="text" name="category" id="category" placeholder="What's the category???"/>
                    <x-form-error name='category' />
                  </div>
                </x-form-field>
  
                <x-form-field>
                  <x-form-label for="studio">Studio</x-form-label>
                  <div class="mt-2 bg-black/70 rounded p-2">
                      <x-form-input type="text" name="studio" id="studio" placeholder="What's the studio???"/>
                    <x-form-error name='studio' />
                  </div>
                </x-form-field>
  
              </div>
            </div>
          </div>
        
          <div class="mt-2 flex items-center justify-around gap-x-36">
            <x-form-button>Add</x-form-button>
            <a href="/books" class="text-sm/6 font-semibold text-red-500 ">Cancel</a>
          </div>
        </form>
         
    </div>

</x-layout> 