<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Practice')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @yield('style')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <main>
        @include('include.header')
        @yield('content')
        @include('include.footer')
    </main>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>

</html>
