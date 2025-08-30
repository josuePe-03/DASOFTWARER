<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-500 to-cyan-400">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-10">
        <div>
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Altamar" width="100">
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white/10 backdrop-blur-2xl shadow-xl overflow-hidden sm:rounded-2xl text-white">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
