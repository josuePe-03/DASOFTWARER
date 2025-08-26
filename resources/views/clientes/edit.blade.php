<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-white">Editar Cliente</h2>
    </x-slot>

    <div class="max-w-xl mx-auto mt-6 bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6">
        <form action="{{ route('clientes.update', $cliente) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Nombre -->
            <div class="mb-4">
                <label class="block font-medium text-white">Nombre</label>
                <input type="text" name="nombre" value="{{ $cliente->nombre }}" 
                       class="w-full rounded-lg bg-white/20 text-white placeholder-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" required>
                @error('nombre')
                    <p class="text-red-200 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Edad -->
            <div class="mb-4">
                <label class="block font-medium text-white">Edad</label>
                <input type="number" name="edad" value="{{ $cliente->edad }}" 
                       class="w-full rounded-lg bg-white/20 text-white placeholder-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" required>
                @error('edad')
                    <p class="text-red-200 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Sexo -->
            <div class="mb-4">
                <label class="block font-medium text-white">Sexo</label>
                <select name="sexo" 
                        class="w-full rounded-lg bg-white/20 text-white placeholder-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300" required>
                    <option value="MASCULINO" {{ $cliente->sexo == 'MASCULINO' ? 'selected' : '' }}>Masculino</option>
                    <option value="FEMENINO" {{ $cliente->sexo == 'FEMENINO' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>

            <!-- Activo -->
            <div class="mb-4">
                <label class="block font-medium text-white">Activo</label>
                <select name="activo" 
                        class="w-full rounded-lg bg-white/20 text-white placeholder-gray-200 px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300">
                    <option value="1" {{ $cliente->activo ? 'selected' : '' }}>Sí</option>
                    <option value="0" {{ !$cliente->activo ? 'selected' : '' }}>No</option>
                </select>
            </div>

            <!-- Botones -->
            <div class="flex items-center space-x-4 mt-6">
                <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-6 py-2 rounded-xl transition">Actualizar</button>
                <a href="{{ route('clientes.index') }}" class="text-white/70 hover:text-white hover:underline transition">Cancelar</a>
            </div>
        </form>
    </div>

</x-app-layout>
