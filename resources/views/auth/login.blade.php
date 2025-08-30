<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h2 class="text-3xl font-bold text-center mb-6">Iniciar Sesión</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="text-white" />
            <x-text-input id="email" 
                          class="block mt-1 w-full rounded-lg bg-white/20 text-white placeholder-gray-200 focus:border-white focus:ring focus:ring-white/50" 
                          type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-200" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="text-white" />
            <x-text-input id="password" 
                          class="block mt-1 w-full rounded-lg bg-white/20 text-white placeholder-gray-200 focus:border-white focus:ring focus:ring-white/50" 
                          type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-200" />
        </div>

        <!-- Remember Me -->
<div class="flex items-center mb-4">
    <label for="remember_me" class="inline-flex items-center text-white">
        <input id="remember_me" type="checkbox" class="rounded border-white text-blue-500 shadow-sm focus:ring-blue-500" name="remember">
        <span class="ml-2 text-sm">{{ __('Remember me') }}</span>
    </label>
</div>


        <div class="flex items-center justify-between mt-6">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-white hover:text-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white" 
                   href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3 bg-white/30 hover:bg-white/50 text-blue-700 font-semibold rounded-xl px-6 py-2 transition ease-in-out duration-200">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
