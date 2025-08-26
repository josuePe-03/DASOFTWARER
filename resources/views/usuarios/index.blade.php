<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-white">Usuarios</h2>
    </x-slot>

    <div class="mb-4">
        <a href="{{ route('usuarios.create') }}" class="bg-white/20 hover:bg-white/30 text-white px-4 py-2 rounded transition">
            + Nuevo usuario
        </a>
    </div>

    @if (session('success'))
        <div class="text-cyan-200 mb-4">{{ session('success') }}</div>
    @endif

    <div class="overflow-x-auto rounded-2xl shadow-lg bg-white/10 backdrop-blur-md">
        <table class="min-w-full text-white">
            <thead class="bg-white/20">
                <tr>
                    <th class="px-4 py-2 text-left">Nombre</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr class="border-b border-white/20 hover:bg-white/10 transition">
                        <td class="px-4 py-2">{{ $usuario->name }}</td>
                        <td class="px-4 py-2">{{ $usuario->email }}</td>
                        <td class="px-4 py-2 flex gap-2">
                            <a href="{{ route('usuarios.edit', $usuario) }}" class="text-cyan-200 hover:text-white transition">Editar</a>
                            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" onsubmit="return confirm('¿Eliminar este usuario?')">
                                @csrf @method('DELETE')
                                <button class="text-red-400 hover:text-red-600 transition">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
