<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Boilerplate</title>
  <livewire:styles>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  @stack('styles')
</head>

<body>

  @yield('content')

  <livewire:scripts>
  <script src="{{ mix('js/app.js') }}"></script>
  @stack('scripts')

</body>

</html>
