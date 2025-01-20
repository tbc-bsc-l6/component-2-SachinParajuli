<x-layout>  
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <div class=" p-0  bg-cover bg-center " style="background-image: url('../images/home_bg.jpg');">
        <!-- Main Container -->
        <div class="flex-row p-2 sm:p-4 justify-around sm:flex-col items-center  h-full text-center text-white bg-black/50">
            <!-- Welcome Section -->
            <div class="p-8 bg-black/70 rounded-lg shadow-lg">
                <h1 class="text-4xl font-bold mb-4">Welcome {{ auth()->check() ? auth()->user()->name : 'Guest' }}.</h1>
                <p class="text-lg">This is your home page content. Feel free to explore.</p>
            </div>

            <!-- Contact Section -->
            <div class="mt-60 p-8 bg-white/80 rounded-lg shadow-lg text-black">
                <h2 class="text-2xl font-semibold mb-2">Get to my profile</h2>
                {{-- <p class="text-gray-600 mb-4">Click the link below to navigate to the contact page.</p> --}}

                @if(auth()->check())
                    <a href="/profile" class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Profile</a>
                @else
                    <a href="/login" class="inline-block px-6 py-2 text-white bg-blue-500 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-400">Profile</a>
                @endif
            </div> 
        </div>
    </div>
</x-layout>
