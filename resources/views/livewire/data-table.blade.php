<div class="pt-10">
  <h1 class="text-2xl font-bold text-gray-800">DataTable</h1>

  <p class="flex">
    <input
      wire:model="search"
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
