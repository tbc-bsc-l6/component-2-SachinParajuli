<x-layout>
    <x-slot:heading>
        Add a Book
    </x-slot:heading>

    <form method="POST" action="/books">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Fill below</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Please add a new book to the store.</p>
      
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              <x-form-field>
                <x-form-label for="title">Title</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="title" id="title" placeholder="What's the name???"/>
                  <x-form-error name='title' />
                </div>
              </x-form-field>

              <x-form-field>
                <x-form-label for="price">Price</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="price" id="price" placeholder="What's the price???"/>
                  <x-form-error name='price' />
                </div>
              </x-form-field>

              <x-form-field>
                <x-form-label for="category">Category</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="category" id="category" placeholder="What's the category???"/>
                  <x-form-error name='category' />
                </div>
              </x-form-field>

              <x-form-field>
                <x-form-label for="studio">Studio</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="studio" id="studio" placeholder="What's the studio???"/>
                  <x-form-error name='studio' />
                </div>
              </x-form-field>

            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/books" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <x-form-button>Add</x-form-button>
        </div>
      </form>
       
</x-layout> 