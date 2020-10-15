<div class="pt-10 mb-64">
  <h1 class="text-2xl font-bold text-gray-800">FileUpload</h1>

  <input
    wire:model="image"
    class="mt-5"
    type="file"
    name="img"
    id="img">

    <p class="mt-4">
      <button
        wire:click="store"
        class="bg-blue-500 hover:bg-blue-700 text-white inline-flex font-bold py-2 px-4 rounded"
        type="button">

        Upload
      </button>
    </p>

    <p>
      @if ($image && $image->temporaryUrl() !== null)
        image Preview:
        <img src="{{ $image->temporaryUrl() }}">
      @endif
    </p>

    @error('image')
      <p class="mt-2 text-red-500">{{ $message }}</p>
    @enderror
</div>
