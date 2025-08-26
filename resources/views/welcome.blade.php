@extends('layouts.main')

@section('title', 'Inicio | MVP Laravel')

@section('content')
  <!-- Características -->
  <section class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl font-semibold text-center mb-12">Características Principales</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white/20 backdrop-blur-lg rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform">
        <h3 class="text-2xl font-bold mb-4">Usuarios</h3>
        <p>Gestión completa de usuarios con roles y credenciales seguras.</p>
      </div>
      <div class="bg-white/20 backdrop-blur-lg rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform">
        <h3 class="text-2xl font-bold mb-4">Perfiles</h3>
        <p>Personalización de perfiles con datos y configuraciones específicas.</p>
      </div>
      <div class="bg-white/20 backdrop-blur-lg rounded-2xl p-8 shadow-lg hover:scale-105 transition-transform">
        <h3 class="text-2xl font-bold mb-4">Permisos</h3>
        <p>Control granular de accesos con roles y permisos dinámicos.</p>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section class="py-16 px-6 bg-white/10 backdrop-blur-md">
    <h2 class="text-3xl font-semibold text-center mb-12">Servicios</h2>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-6 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 shadow-lg hover:shadow-2xl transition">
        <h3 class="text-xl font-bold mb-3">API REST</h3>
        <p>Servicios listos para integrarse con aplicaciones móviles y web.</p>
      </div>
      <div class="p-6 rounded-xl bg-gradient-to-r from-green-400 to-emerald-500 shadow-lg hover:shadow-2xl transition">
        <h3 class="text-xl font-bold mb-3">Autenticación</h3>
        <p>Registro, login, recuperación de contraseña y seguridad integrada.</p>
      </div>
      <div class="p-6 rounded-xl bg-gradient-to-r from-orange-400 to-red-500 shadow-lg hover:shadow-2xl transition">
        <h3 class="text-xl font-bold mb-3">Dashboard</h3>
        <p>Panel administrativo moderno con estadísticas y control de usuarios.</p>
      </div>
    </div>
  </section>

  <!-- Testimonios -->
  <section class="py-16 px-6 max-w-6xl mx-auto">
    <h2 class="text-3xl font-semibold text-center mb-12">Testimonios</h2>
    <div class="grid md:grid-cols-2 gap-8">
      <div class="bg-white/20 rounded-2xl p-6 shadow-md" x-data="{ show: false }" x-intersect="show = true">
        <p class="italic mb-4" x-show="show" x-transition>“Este sistema base en Laravel me permitió ahorrar semanas de desarrollo inicial.”</p>
        <span class="font-bold">- Juan Pérez, Desarrollador</span>
      </div>
      <div class="bg-white/20 rounded-2xl p-6 shadow-md" x-data="{ show: false }" x-intersect="show = true">
        <p class="italic mb-4" x-show="show" x-transition>“Muy fácil de personalizar y con las mejores prácticas listas.”</p>
        <span class="font-bold">- Ana López, Freelancer</span>
      </div>
    </div>
  </section>
@endsection
