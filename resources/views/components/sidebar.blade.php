<aside class="w-64 bg-gradient-to-b from-blue-500 to-cyan-400 text-white flex flex-col justify-between shadow-lg" x-data="{ open: false }">
    <div class="px-6 py-6">
        <h1 class="text-2xl font-bold mb-8 tracking-wide">MVP Laravel</h1>

        <nav class="space-y-2 text-sm">
            @auth
                @if (auth()->user()->tienePerfil('Capturista') || auth()->user()->tienePerfil('Administrador'))
                    <a href="/clientes" class="block px-3 py-2 rounded hover:bg-white/20 transition">Clientes</a>
                @endif

                @if (auth()->user()->tienePerfil('Administrador'))
                    {{-- Dropdown Usuarios --}}
                    <div x-data="{ usuariosOpen: {{ request()->is('usuarios*') || request()->is('perfiles*') || request()->is('permisos*') ? 'true' : 'false' }} }">
                        <button @click="usuariosOpen = !usuariosOpen" 
                                class="w-full text-left px-3 py-2 rounded hover:bg-white/20 flex justify-between items-center transition">
                            <span>Usuarios</span>
                            <svg :class="{ 'rotate-180': usuariosOpen }" class="w-4 h-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div x-show="usuariosOpen" x-transition class="mt-1 space-y-1 pl-4">
                            <a href="/usuarios" 
                               class="block px-3 py-2 rounded hover:bg-white/20 transition {{ request()->is('usuarios*') ? 'bg-white/30' : '' }}">Usuarios</a>
                            <a href="/perfiles" 
                               class="block px-3 py-2 rounded hover:bg-white/20 transition {{ request()->is('perfiles*') ? 'bg-white/30' : '' }}">Perfiles</a>
                            <a href="/permisos" 
                               class="block px-3 py-2 rounded hover:bg-white/20 transition {{ request()->is('permisos*') ? 'bg-white/30' : '' }}">Permisos</a>
                        </div>
                    </div>
                @endif

                <form method="POST" action="/logout" class="mt-6">
                    @csrf
                    <button type="submit"
                            class="w-full text-left px-3 py-2 rounded hover:bg-white/20 transition">
                        Cerrar sesión
                    </button>
                </form>
            @endauth
        </nav>
    </div>

    <div class="px-6 py-4 text-sm text-white/70">
        © {{ date('Y') }} MVP Laravel
    </div>
</aside>
