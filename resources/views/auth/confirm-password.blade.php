<x-guest-layout>

    <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-2.5">
        Panel de administración
    </p>
    <h1 class="heading-auth">
        Confirma tu contraseña
    </h1>

    <p class="text-sm text-ink-muted leading-[1.6] mb-5">
        {{ __('Esta es una zona segura de la aplicación. Confirma tu contraseña antes de continuar.') }}
    </p>

    <form method="POST" action="{{ route('password.confirm') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block w-full" type="password" name="password" required
                autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Confirmar') }}
        </x-primary-button>
    </form>
</x-guest-layout>
