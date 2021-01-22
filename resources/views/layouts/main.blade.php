<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  @include('partials.main.styles')
</head>

<body>
  <div id="app">
    @include('partials.main.header')

    <main class="py-4">
      <div class="container">
        @yield('content')
      </div>
    </main>
  </div>
</body>

@include('partials.main.scripts')

</html>
