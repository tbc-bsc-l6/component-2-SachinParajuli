{{-- <x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

              <x-form-field>
                <x-form-label for="name">Name</x-form-label>
                <div class="mt-2">
                    <x-form-input type="text" name="name" id="name" placeholder="What's your name???"/>
                  <x-form-error name='name' />
                </div>
              </x-form-field>

              <x-form-field>
                <x-form-label for="email">Email</x-form-label>
                <div class="mt-2">
                    <x-form-input type="email" name="email" id="email" placeholder="What's your email???"/>
                  <x-form-error name='email' />
                </div>
              </x-form-field>

              <x-form-field>
                <x-form-label for="password">Password</x-form-label>
                <div class="mt-2">
                    <x-form-input type="password" name="password" id="password" placeholder="Type the password"/>
                  <x-form-error name='password' />
                </div>
              </x-form-field>

              <x-form-field>
                <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                <div class="mt-2">
                    <x-form-input type="password" name="password_confirmation" id="password_confirmation" placeholder="Retype the passsword"/>
                  <x-form-error name='password_confirmation' />
                </div>
              </x-form-field>

            </div>
          </div>
        </div>
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <x-form-button>Register</x-form-button>
        </div>
      </form>
       
</x-layout>  --}}


<x-layout>
  <x-slot:heading>
      Register
  </x-slot:heading>

  <div class="flex items-center justify-center p-16 shadow-lg shadow-cyan-800"
       style="background-image: url('path/to/your/background.jpg');">
      <div class="w-full max-w-md p-8 bg-white/70 shadow-lg rounded-lg backdrop-blur-md shadow-yellow-500 shadow-inner">
          <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">Register</h2>

          <form method="POST" action="/register" class="space-y-6">
              @csrf

              <!-- Name Field -->
              <div>
                  <x-form-label for="name" class="text-gray-700 font-medium">Name</x-form-label>
                  <x-form-input type="text" name="name" id="name"
                                class="mt-2 w-full px-4 py-2 rounded-md border-gray-300 shadow-sm focus:ring-black/50 focus:border-black/60"
                                placeholder="What's your name???" />
                  <x-form-error name="name" />
              </div>

              <!-- Email Field -->
              <div>
                  <x-form-label for="email" class="text-gray-700 font-medium">Email</x-form-label>
                  <x-form-input type="email" name="email" id="email"
                                class="mt-2 w-full px-4 py-2 rounded-md border-gray-300 shadow-sm focus:ring-black/50 focus:border-black/60"
                                placeholder="What's your email???" />
                  <x-form-error name="email" />
              </div>

              <!-- Password Field -->
              <div>
                  <x-form-label for="password" class="text-gray-700 font-medium">Password</x-form-label>
                  <x-form-input type="password" name="password" id="password"
                                class="mt-2 w-full px-4 py-2 rounded-md border-gray-300 shadow-sm focus:ring-black/50 focus:border-black/60"
                                placeholder="Type your password" />
                  <x-form-error name="password" />
              </div>

              <!-- Confirm Password Field -->
              <div>
                  <x-form-label for="password_confirmation" class="text-gray-700 font-medium">Confirm Password</x-form-label>
                  <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                class="mt-2 w-full px-4 py-2 rounded-md border-gray-300 shadow-sm focus:ring-black/50 focus:border-black/60"
                                placeholder="Retype your password" />
                  <x-form-error name="password_confirmation" />
              </div>

              <!-- Buttons -->
              <div class="flex items-center justify-between mt-4">
                  <a href="/" class="text-sm font-semibold text-gray-700 hover:text-black/60">
                      Cancel
                  </a>
                  <x-form-button class="bg-black/80 text-white px-4 py-2 rounded-md shadow-md hover:bg-black/60">
                      Register
                  </x-form-button>
              </div>
          </form>
      </div>
  </div>
</x-layout>
