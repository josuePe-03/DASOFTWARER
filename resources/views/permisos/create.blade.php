<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-white">Nuevo Permiso</h2>
    </x-slot>

    <div class="max-w-lg mx-auto mt-6 bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6">
        <form action="{{ route('permisos.store') }}" method="POST">
            @csrf

            <!-- Nombre -->
            <div class="mb-4">
                <label class="block font-medium text-white mb-1">Nombre</label>
                <input type="text" name="nombre" required
                       class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300">
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label class="block font-medium text-white mb-1">Descripción</label>
                <textarea name="descripcion" rows="4"
                          class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"></textarea>
            </div>

            <!-- Botones -->
            <div class="flex items-center space-x-4 mt-6">
                <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-6 py-2 rounded-xl transition">Guardar</button>
                <a href="{{ route('permisos.index') }}" class="text-white/70 hover:text-white hover:underline transition">Cancelar</a>
            </div>
        </form>
    </div>
</x-app-layout>
