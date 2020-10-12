@extends('layouts.app')
@section('content')
<div class="w-3/4 mx-auto">
  {{-- news letter --}}
  <div class="pt-10">
    <h1 class="text-2xl font-bold text-gray-800">News Letter</h1>
    {{-- message --}}
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
      <strong class="font-bold">Success!</strong>
      <span class="block sm:inline">{{ $message ?? '' }}</span>
      <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
      </span>
    </div>

    <p class="pt-2 flex justify-between">
      <input
        name="email"
        type="text"
        class="w-full flex p-2 shadow rounded"
      >
      <span>
        <button
          class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded"
          type="button"
        >Subscribe
      </button>
      </span>
      @error('email')
      <p class="mt-2 text-red-500">foo</p>
      @enderror
    </p>
  </div>

  {{-- data table --}}
  <div class="pt-10">
    <h1 class="text-2xl font-bold text-gray-800">DataTable</h1>

    <p class="flex">
      <input
        class="p-2 shadow rounded w-1/4"
        id="search"
        type="text"
        class="p-2 shadow rounded"
        placeholder="search..."
    >

    </p>
    <table class="mt-2 table-auto w-full border bg-white shadow-lg">
      <thead>
        <tr>
          <th class="border px-4 py-2">ID</th>
          <th class="border px-4 py-2">Name</th>
          <th class="border px-4 py-2">Email</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($users as $user)
        <tr>
          <td class="border px-4 py-2">{{ $user->id }}</td>
          <td class="border px-4 py-2">{{ $user->name }}</td>
          <td class="border px-4 py-2">{{ $user->email }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>

    <div class="mt-6">
      {{ $users->links() }}
    </div>
  </div>

  {{-- file upload --}}
  <div class="pt-10">
    <h1 class="text-2xl font-bold text-gray-800">FileUpload</h1>

    <input
      class="mt-5"
      type="file"
      name="img"
      id="img">

  </div>


</div>
@endsection
