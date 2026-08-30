<x-guest-layout>

    <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-2.5">
        Panel de administración
    </p>
    <h1 class="heading-auth">
        Crear cuenta
    </h1>

    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="flex flex-col gap-2">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col gap-2">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="flex flex-col gap-2">
            <x-input-label for="password_confirmation" :value="__('Repetir contraseña')" />
            <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <div class="flex items-center justify-between gap-4 flex-wrap">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-oxide hover:text-oxide-hover">Inicia
                sesión</a>
            <a href="{{ route('password.request') }}"
                class="text-sm font-semibold text-oxide hover:text-oxide-hover">¿Has olvidado tu contraseña?</a>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Crea tu cuenta') }}
        </x-primary-button>
    </form>
</x-guest-layout>
