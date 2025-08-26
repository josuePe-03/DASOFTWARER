<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-white">Editar Perfil</h2>
    </x-slot>

    <div class="max-w-7xl mx-auto mt-6 grid grid-cols-1 lg:grid-cols-4 gap-6">
        <form action="{{ route('perfiles.update', $perfil) }}" method="POST" class="lg:col-span-4 bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                {{-- Información del perfil --}}
                <div class="lg:col-span-2 bg-white/20 rounded-xl shadow-md p-6">
                    <h3 class="text-lg font-semibold text-white mb-4">Información del Perfil</h3>

                    <div class="mb-4">
                        <label class="block font-medium text-white mb-1">Nombre</label>
                        <input type="text" name="nombre" value="{{ $perfil->nombre }}"
                            class="w-full rounded-lg bg-white/20 text-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" required>
                    </div>

                    <div class="mb-4">
                        <label class="block font-medium text-white mb-1">Descripción</label>
                        <textarea name="descripcion" rows="3"
                            class="w-full rounded-lg bg-white/20 text-white px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300">{{ $perfil->descripcion }}</textarea>
                    </div>

                    <div class="flex justify-end mt-6">
                        <a href="{{ route('perfiles.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-white/20 text-white rounded hover:bg-white/30 transition">
                            Cancelar
                        </a>
                        <button
                            class="ml-4 inline-flex items-center px-5 py-2 bg-cyan-500 text-white rounded-xl hover:bg-cyan-600 transition">
                            Actualizar
                        </button>
                    </div>
                </div>

                {{-- Permisos asignados --}}
                <div class="lg:col-span-2 bg-white/20 rounded-xl shadow-md p-6 h-fit">
                    <h3 class="text-lg font-semibold text-white mb-4">Permisos Asignados</h3>

                    <div class="grid grid-cols-1 gap-4">
                        @foreach($permisos as $permiso)
                            <label 
                                class="bg-white/10 border border-white/30 hover:border-cyan-400 transition-all duration-150 shadow-sm rounded-lg p-4 flex items-start gap-3 cursor-pointer">
                                <input 
                                    type="checkbox" 
                                    name="permisos[]" 
                                    value="{{ $permiso->id }}" 
                                    {{ $perfil->permisos->contains($permiso->id) ? 'checked' : '' }}
                                    class="mt-1 accent-cyan-500"
                                >
                                <div>
                                    <p class="font-medium text-white">{{ $permiso->nombre }}</p>
                                    <p class="text-sm text-white/70">{{ $permiso->descripcion }}</p>
                                </div>
                            </label>
                        @endforeach
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
