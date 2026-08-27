<x-guest-layout>

    <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-2.5">
        Panel de administración
    </p>
    <h1 class="heading-auth">
        Confirma tu correo
    </h1>

    <p class="text-sm text-ink-muted leading-[1.6] mb-5">
        {{ __('Gracias por registrarte. Antes de continuar debes confirmar tu cuenta pulsando el enlace que te hemos enviado por email.') }}
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-5 border-l-4 border-green-600 bg-green-50 text-green-700 font-semibold text-sm p-3 rounded-sharp">
            {{ __('Hemos enviado un nuevo email de confirmación a la cuenta que utilizaste para el registro.') }}
        </div>
    @endif

    <div class="flex items-center justify-between gap-4 flex-wrap">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-primary-button>
                {{ __('Reenviar email de confirmación') }}
            </x-primary-button>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-[13px] font-semibold text-oxide hover:text-oxide-hover">
                {{ __('Cerrar sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
