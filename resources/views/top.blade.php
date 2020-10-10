@extends('layouts.app')
@section('content')
<div class="w-3/4 mx-auto">
  {{-- news letter --}}
  <div class="pt-10">
    <h1 class="text-2xl font-bold text-gray-800">News Letter</h1>
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
