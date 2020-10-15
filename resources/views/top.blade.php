@extends('layouts.app')
@section('content')
<div class="w-3/4 mx-auto">
  {{-- news letter --}}
  <livewire:news-letter />
  {{-- data table --}}
  <livewire:data-table />
  {{-- file upload --}}
  <livewire:image-upload />

</div>
@endsection
