<!DOCTYPE html>
<html lang="es" x-data="{ open: false }" xmlns="http://www.w3.org/1999/xhtml">
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
<body class="bg-gradient-to-br from-blue-500 to-cyan-400 text-white font-sans">

    <!-- Header -->
    <header class="text-center py-16">
        <h1 class="text-4xl md:text-6xl font-bold mb-4 animate-bounce">Sistema Base en Laravel</h1>
        <p class="text-lg max-w-2xl mx-auto">Un sistema inicial con autenticación, usuarios, perfiles y permisos listo para expandirse en tus proyectos.</p>
    </header>

    {{-- Contenido principal --}}
    <main class="max-w-7xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-6 bg-black/30">
        <p>© 2025 Sistema Base Laravel - Todos los derechos reservados</p>
    </footer>
    @stack('scripts')
</body>
</html>

