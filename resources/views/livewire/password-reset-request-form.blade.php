@section('title', 'Reset Password')


<div class="w-1/5 mx-auto pt-32">

  @if(session('message'))
    @if (session('message.type') === 'error')
      <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ session('message.body') }}</span>
      </div>
    @else
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('message.body') }}</span>
      </div>
    @endif
  @endif

  <div class="bg-white shadow rounded p-4">
    <p class="font-semibold text-lg  uppercase">reset password</p>
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
    <div>
      <button type="button" class="p-2 rounded bg-blue-500 text-white font-semibold" wire:click="sendResetLink">Send Password Reset Link</button>
    </div>
  </div>
</div>
