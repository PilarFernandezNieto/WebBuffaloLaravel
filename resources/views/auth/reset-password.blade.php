<x-guest-layout>

    <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-2.5">
        Panel de administración
    </p>
    <h1 class="heading-auth">
        Nueva contraseña
    </h1>

    <form method="POST" action="{{ route('password.store') }}" class="flex flex-col gap-5">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="flex flex-col gap-2">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block w-full" type="email" name="email"
                :value="old('email', $request->email)" required autofocus autocomplete="username" />
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
            <x-text-input id="password_confirmation" class="block w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" />
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Restablecer contraseña') }}
        </x-primary-button>
    </form>
</x-guest-layout>
