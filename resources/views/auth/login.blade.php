<x-guest-layout>





    <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-2.5">
        Panel de administración
    </p>
    <h1 class="heading-auth">
        Iniciar sesión
    </h1>

    <x-auth-session-status
        class="mb-5 block border-l-4 border-green-600 bg-green-50 text-green-700 font-semibold text-sm p-3 rounded-sharp"
        :status="session('status')" />

    @if ($errors->any())
        <p role="alert"
            class="text-sm font-semibold leading-[1.55] text-oxide border-l-4 border-oxide-light bg-cream-white p-3 rounded-sharp mb-5">
            {{ __('Credenciales incorrectas. Revisa el correo y la contraseña.') }}
        </p>
    @endif

    <form method="POST" action="{{ route('login') }}" novalidate class="flex flex-col gap-5">
        @csrf

        <div class="flex flex-col gap-2">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')"
                placeholder="tu@theelectricbuffalo.com" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col gap-2">
            <x-input-label for="password" :value="__('Contraseña')" />
            <div class="flex gap-2.5 items-stretch">
                <x-text-input id="password" class="block w-full flex-1 min-w-0" type="password" name="password"
                    placeholder="••••••••" required autocomplete="current-password" />
                <button type="button" id="toggle-password"
                    class="shrink-0 flex items-center font-cuerpo bg-transparent border border-rule-input text-ink-muted text-xs font-bold tracking-[1.2px] uppercase px-4 rounded-sharp cursor-pointer hover:bg-ink hover:border-ink hover:text-cream-white transition duration-200">
                    Ver
                </button>
            </div>
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="flex items-center justify-between gap-4 flex-wrap">
            <label for="remember_me" class="flex items-center gap-2.5 cursor-pointer">
                <input id="remember_me" type="checkbox" name="remember"
                    class="w-5 h-5 accent-oxide rounded-sharp cursor-pointer">
                <span class="text-sm text-ink-body">Mantener la sesión</span>
            </label>
            <a href="{{ route('password.request') }}" class="text-sm font-semibold text-oxide hover:text-oxide-hover">
                ¿Olvidaste la contraseña?
            </a>
        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Entrar') }}
        </x-primary-button>
    </form>

    @push('scripts')
        <script>
            const toggle = document.getElementById('toggle-password');
            const password = document.getElementById('password');
            toggle?.addEventListener('click', () => {
                const isHidden = password.type === 'password';
                password.type = isHidden ? 'text' : 'password';
                toggle.textContent = isHidden ? 'Ocultar' : 'Ver';
                toggle.setAttribute('aria-pressed', isHidden ? 'true' : 'false');
            });
        </script>
    @endpush
</x-guest-layout>
