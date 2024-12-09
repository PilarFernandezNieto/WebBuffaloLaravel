<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('¿Has olvidade tu contraseña? Introduce el email de registro y te enviaremos un enlace para que puedas crear una nueva ') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            <x-link :href="route('login')" class="text-xs">Inicia sesión</x-link>
            <x-link :href="route('register')" class="text-xs">Crea tu cuenta</x-link>
        </div>

        <x-primary-button class="w-full justify-center text-xs">
            {{ __('Enviar instrucciones') }}
        </x-primary-button>
    </form>
</x-guest-layout>
