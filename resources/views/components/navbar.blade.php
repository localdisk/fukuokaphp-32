<div>
  <nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="flex-shrink-0 text-lg text-white font-semibold">
            Laravel
          </div>
          <div class="block">
            <div class="ml-10 flex items-baseline">
              <a href="{{ route('home') }}" class="ml-4 px-3 py-2 rounded-md font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Home</a>
            </div>
          </div>
        </div>
        <div class="block">
          <div class="ml-4 flex items-center">

            @auth
            <!-- Profile dropdown -->
            <div class="ml-3 relative" x-data="{ show: false }">
              <div>
                <button class="max-w-xs flex items-center text-sm rounded-full text-white focus:outline-none focus:shadow-solid" id="user-menu" aria-label="User menu" aria-haspopup="true" @click="show = ! show" @click.away="show = false">
                  {{-- avatar --}}
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </button>
              </div>
              {{-- dropdown --}}
              <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg" x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90">
                <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                  <livewire:logout />
                </div>
              </div>
            </div>
            @endauth

            @guest
            <a href="{{ route('register') }}" class="block ml-3 px-3 py-2 rounded-md font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Register</a>
            <a href="{{ route('login') }}" class="block ml-3 px-3 py-2 rounded-md font-medium text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700">Login</a>
            @endguest

          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
