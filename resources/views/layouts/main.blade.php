<!DOCTYPE html>
<html lang="es" x-data="{ open: false }" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <meta
      name="description"
      content="Altamar Comunicación y Desarrollo: Creamos sitios web profesionales y hacemos crecer tu negocio con marketing digital."
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      html {
        scroll-behavior: smooth;
      }
      body {
        font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu,
          Cantarell, Noto Sans, Helvetica Neue, Arial, "Apple Color Emoji",
          "Segoe UI Emoji";
      }
      .container {
        max-width: 110rem;
      }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
  <body class="bg-slate-50 text-slate-800">

        <!-- Header -->
    <header
      class="sticky top-0 z-50 bg-white/80 backdrop-blur border-b border-slate-200"
    >
      <div class="container mx-auto px-4">
        <div class="flex items-center justify-between py-4">
          <a href="#" class="flex items-center gap-2">
            <span
              class="inline-flex h-9 w-9 items-center justify-center rounded-2xl bg-brand-600 text-white font-bold shadow-soft"
              >A</span
            >
            <span class="font-extrabold text-lg tracking-tight"
              >Altamar Comunicación</span
            >
          </a>
          <nav class="hidden md:flex items-center gap-6 font-medium">
            <a href="#servicios" class="hover:text-brand-600">Servicios</a>
            <a href="#portafolio" class="hover:text-brand-600">Portafolio</a>
            <a href="#proceso" class="hover:text-brand-600">Proceso</a>
            <a href="#precios" class="hover:text-brand-600">Precios</a>
            <a href="#nosotros" class="hover:text-brand-600">Nosotros</a>
            <a href="#contacto" class="hover:text-brand-600">Contacto</a>
          </nav>
          <div class="flex items-center gap-3">
            <a
              href="#contacto"
              class="hidden sm:inline-flex items-center rounded-xl border border-slate-300 px-4 py-2 text-sm font-semibold hover:bg-slate-100"
              >Agenda una llamada</a
            >
            <a
              href="#contacto"
              class="inline-flex items-center rounded-xl bg-brand-500 px-4 py-2 text-sm font-semibold text-white shadow-soft hover:bg-brand-600"
              >Solicitar cotización</a
            >
          </div>
        </div>
      </div>
    </header>



    {{-- Contenido principal --}}
    <main class="max-w-7xl mx-auto px-4 py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="border-t border-slate-200">
      <div class="container mx-auto px-4">
        <div
          class="flex flex-col sm:flex-row items-center justify-between gap-4 py-6 text-sm text-slate-600"
        >
          <div class="flex items-center gap-2">
            <span
              class="inline-flex h-8 w-8 items-center justify-center rounded-xl bg-brand-600 text-white font-bold"
              >A</span
            >
            <span
              >© <span id="year"></span> Altamar Comunicación y Desarrollo.
              Todos los derechos reservados.</span
            >
          </div>
          <div class="flex items-center gap-4">
            <a href="#servicios" class="hover:text-brand-600">Servicios</a>
            <a href="#portafolio" class="hover:text-brand-600">Portafolio</a>
            <a href="#contacto" class="hover:text-brand-600">Contacto</a>
          </div>
        </div>
      </div>
    </footer>

    @stack('scripts')

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>
</html>

