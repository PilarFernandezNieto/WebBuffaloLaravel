<div class="flex flex-wrap gap-cols-lg">

    {{-- FORMULARIO --}}
    <div class="flex-1 basis-[440px] min-w-[300px] border-t border-rule-light pt-8">

        @if (session()->has('success'))
            <div role="status" class="border-2 border-oxide bg-cream-field px-5 py-4 mb-6">
                <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-1">Mensaje enviado</p>
                <p class="text-ink-body text-sm">{{ session('success') }}</p>
            </div>
        @endif
        @if (session()->has('error'))
            <div role="alert" class="border-2 border-oxide bg-cream-field px-5 py-4 mb-6">
                <p class="text-oxide font-semibold text-sm">{{ session('error') }}</p>
            </div>
        @endif

        <form method="POST" class="flex flex-col gap-[22px]" novalidate x-data="{
            siteKey: @js(config('services.recaptcha.site_key')),
            recaptchaToken: null,
            submit() {
                grecaptcha.ready(() => {
                    grecaptcha.execute(this.siteKey, { action: 'submit' }).then(token => {
                        this.recaptchaToken = token;
                        @this.set('recaptchaToken', this.recaptchaToken);
                        @this.call('submit');
                    });
                });
            }
        }"
            @submit.prevent="submit">
            <div>
                <label for="nombre" class="block font-cuerpo text-xs font-bold uppercase tracking-[1.3px] text-ink-heading mb-2">{{ __('Nombre') }}</label>
                <x-text-input id="nombre" class="block w-full" type="text" wire:model="nombre" :value="old('nombre')"
                    autocomplete="name" placeholder="Tu nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>

            <div>
                <label for="email" class="block font-cuerpo text-xs font-bold uppercase tracking-[1.3px] text-ink-heading mb-2">{{ __('Correo electrónico') }}</label>
                <x-text-input id="email" class="block w-full" type="email" wire:model="email" :value="old('email')"
                    autocomplete="email" placeholder="tu@correo.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <label for="mensaje" class="block font-cuerpo text-xs font-bold uppercase tracking-[1.3px] text-ink-heading mb-2">{{ __('Mensaje') }}</label>
                <textarea wire:model="mensaje" id="mensaje" wire:model.defer="mensaje" wire:ignore rows="7"
                    placeholder="Cuéntanos"
                    class="block w-full resize-y bg-cream-field border border-rule-input rounded-sharp px-4 py-[14px] font-cuerpo text-base text-ink-body placeholder:text-ink-muted/60 focus:border-oxide-focus focus:ring-oxide-focus"></textarea>
                <x-input-error :messages="$errors->get('mensaje')" class="mt-2" />
            </div>

            <div>
                <div class="flex items-start gap-3">
                    <input type="checkbox" wire:model="privacidad" id="privacidad"
                        class="mt-1 h-[22px] w-[22px] rounded-sharp border-rule-input text-oxide focus:ring-oxide">
                    <label for="privacidad" class="text-sm leading-[1.6] text-ink-body max-w-[60ch]">
                        He leído y acepto la <a href="{{ route('politica') }}" class="text-oxide hover:text-oxide-hover font-semibold">política de privacidad</a>. Usaremos tus datos solo para responderte.
                    </label>
                </div>
                <x-input-error :messages="$errors->get('privacidad')" class="mt-2" />
            </div>

            <div>
                <x-primary-button class="w-full">Enviar mensaje</x-primary-button>
                <p class="font-titulo italic text-ink-muted text-sm mt-3">Respondemos en 2–3 días.</p>
            </div>
        </form>
    </div>

    {{-- COLUMNA LATERAL --}}
    <div class="flex-1 basis-[260px] min-w-[260px] border-t border-rule-light pt-8">
        <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-4">Directo al grano</p>
        <a href="mailto:info@theelectricbuffalo.com" class="block font-titulo font-black text-ink-heading text-xl hover:text-oxide transition-colors duration-200 mb-4">info@theelectricbuffalo.com</a>
        <p class="text-ink-body text-sm leading-[1.6] max-w-[56ch] mb-8">¿Organizas conciertos o festivales? Escríbenos con las fechas y el lugar y te respondemos con la disponibilidad de la banda.</p>

        <div class="border-t border-rule-light pt-6">
            <p class="font-cuerpo text-xs font-bold uppercase tracking-[1.3px] text-ink-muted mb-3">También por aquí</p>
            <div class="flex flex-col gap-2">
                <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank" class="text-oxide hover:text-oxide-hover text-sm font-semibold transition-colors duration-200">Instagram</a>
                <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" target="_blank" class="text-oxide hover:text-oxide-hover text-sm font-semibold transition-colors duration-200">Facebook</a>
                <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" class="text-oxide hover:text-oxide-hover text-sm font-semibold transition-colors duration-200">Bandcamp</a>
                <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank" class="text-oxide hover:text-oxide-hover text-sm font-semibold transition-colors duration-200">YouTube</a>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
@endpush
