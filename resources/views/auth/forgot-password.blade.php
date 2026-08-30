<x-guest-layout>

    <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-2.5">
        Panel de administración
    </p>
    <h1 class="heading-auth">
        Recuperar contraseña
    </h1>

    <p class="text-sm text-ink-muted leading-[1.6] mb-5">
        {{ __('¿Has olvidado tu contraseña? Introduce el correo con el que te registraste y te enviaremos un enlace para que puedas crear una nueva.') }}
    </p>

    <x-auth-session-status
        class="mb-5 block border-l-4 border-green-600 bg-green-50 text-green-700 font-semibold text-sm p-3 rounded-sharp"
        :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex items-center justify-between gap-4 flex-wrap">
            <a href="{{ route('login') }}" class="text-sm font-semibold text-oxide hover:text-oxide-hover">Inicia
                sesión</a>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Enviar instrucciones') }}
        </x-primary-button>
    </form>
</x-guest-layout>
