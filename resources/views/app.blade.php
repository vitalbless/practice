<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Описание страницы для SEO">
    <meta name="keywords" content="ключевые слова, для, seo">

    <title>@yield('title', 'Practice')</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('layout.header')
    <main>
        @yield('content')
    </main>
    @include('layout.footer')
</body>

</html>
