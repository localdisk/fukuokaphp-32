@section('title', 'Login')

<div class="w-1/5 mx-auto pt-32">
  <div class="bg-white shadow rounded p-4">
    <p class="font-semibold text-lg  uppercase">login</p>
    {{-- email --}}
    <label for="email" class="block text-gray-700 font-semibold mb-2">Email Address</label>
    <div class="mb-2">
      <input type="text" name="email" wire:model="email" id="email" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
        @error('email')
          border-red-500
        @enderror">
      @error('email')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
    {{-- password --}}
    <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
    <div class="mb-2">
      <input type="password" name="password" wire:model="password" id="password" class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
        @error('password')
          border-red-500
        @enderror">
      @error('password')
      <p class="text-red-500 text-xs italic">{{ $message }}</p>
      @enderror
    </div>
    <div>
      <button type="button" class="p-2 rounded bg-blue-500 text-white font-semibold" wire:click="login">Login</button>
      <a href="{{ route('password.request') }}" class="text-blue-600 font-semibold ml-2">Forgot Password?</a>
    </div>
  </div>
</div>
