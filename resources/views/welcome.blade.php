<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Practice')</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/js/header/menu.js'])
</head>

<body>
    <main>
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </main>
</body>

</html>
