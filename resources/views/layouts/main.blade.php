<!DOCTYPE html>
<html lang="es" x-data="{ open: false }" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', config('app.name', 'D&A Software R'))</title>
    <meta
      name="description"
      content="DaSoftware: Desarrollo de software, sitios web y apps a medida. Creamos soluciones tecnológicas innovadoras, escalables y optimizadas para SEO en Google."
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
              >D&A Software R</span
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
        <footer class="border-t border-slate-200 py-12 mt-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-10">
            
            <!-- Logo y descripción -->
            <div>
            <h3 class="text-2xl font-bold text-slate-600">D&A Software R</h3>
            <p class="mt-4 text-sm text-slate-500">Laboratorio especializado en análisis clínicos, de agua y alimentos. Resultados confiables y precisos, avalados por certificaciones.</p>
            </div>

            <!-- Información de contacto -->
            <div>
            <h4 class="text-lg font-semibold text-slate-600 mb-4">Contacto</h4>
            <p class="text-slate-600">📍 Cjon. Francisco X. Clavijero No. 234, Centro, 91700 Veracruz, Ver.</p>
            <p class="text-slate-600">📞 (+52) 229-229-0382</p>
            <p class="text-slate-600">✉️ rrodriguez@dasoftwarer.com</p>
            <p class="text-slate-600 mt-2">🕒 Lunes a Viernes: 8:00 am - 6:00 pm</p>
            </div>

            <!-- Redes sociales -->
            <div>
            <h4 class="text-lg font-semibold text-slate-600 mb-4">Síguenos</h4>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-cyan-400 transition">Facebook</a>
                <a href="#" class="hover:text-cyan-400 transition">Instagram</a>
                <a href="#" class="hover:text-cyan-400 transition">LinkedIn</a>
            </div>
            </div>
        </div>

        <!-- Copy -->
        <div class="text-center text-slate-600 text-sm mt-10 border-t border-gray-300 pt-6">
            © {{ date('Y') }} D&A Software R. Todos los derechos reservados.
        </div>
    </footer>

    @stack('scripts')

    <script>
      document.getElementById("year").textContent = new Date().getFullYear();
    </script>
</body>
</html>

