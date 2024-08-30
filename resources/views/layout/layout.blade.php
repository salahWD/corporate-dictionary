<!DOCTYPE html>
<html class="{{ app()->getLocale() }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @yield('meta')

  <title>{{ isset($PAGE_TITLE) ? $PAGE_TITLE : env('APP_NAME') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  @vite('resources/css/app.css')

  @yield('style')

</head>

<body class="font-sans antialiased">

  @include('layout/header')

  @yield('content')

  @include('layout/footer')

  @yield('script')
</body>

</html>
