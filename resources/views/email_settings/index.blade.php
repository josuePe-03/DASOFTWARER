<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-white">Configuraciones de Correo</h2>
    </x-slot>

    <div class="max-w-lg mx-auto mt-6 bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('email_settings.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block font-medium text-white mb-1">Mailer</label>
                <input type="text" name="mailer"
                    class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
                    value="{{ $setting->mailer ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="block font-medium text-white mb-1">From Address</label>
                <input type="email" name="from_address"
                    class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
                    value="{{ $setting->from_address ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="block font-medium text-white mb-1">From Name</label>
                <input type="text" name="from_name"
                    class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
                    value="{{ $setting->from_name ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label class="block font-medium text-white mb-1">API Key (Resend)</label>
                <input type="text" name="api_key"
                    class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300"
                    value="{{ $setting->api_key ?? '' }}" required>
            </div>

            <!-- Botones -->
            <div class="flex items-center space-x-4 mt-6">
                <button type="submit" class="bg-cyan-500 hover:bg-cyan-600 text-white font-semibold px-6 py-2 rounded-xl transition">Guardar</button>
                <a href="{{ route('email_settings.index') }}" class="text-white/70 hover:text-white hover:underline transition">Cancelar</a>
            </div>
        </form>
    </div>

    <div class="max-w-lg mx-auto mt-6 bg-white/20 backdrop-blur-md rounded-2xl shadow-lg p-6">
        <h3 class="text-white font-semibold mb-3">Enviar correo de prueba</h3>

        <form action="{{ route('email_settings.sendTest') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="block font-medium text-white mb-1">Correo de prueba</label>
                <input type="email" name="test_email" placeholder="correo@ejemplo.com" required
                    class="w-full rounded-lg bg-white/20 text-white px-3 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-300 focus:border-cyan-300">
            </div>

            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-xl transition">
                Enviar correo de prueba
            </button>
        </form>
    </div>
</x-app-layout>
