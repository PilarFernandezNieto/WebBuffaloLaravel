<footer class="bg-ink px-[clamp(20px,4vw,48px)] py-[clamp(40px,5vw,52px)]">
    <div class="max-w-home mx-auto">

        <div class="flex flex-wrap items-center justify-between gap-x-10 gap-y-8">
            <p class="font-titulo font-black uppercase tracking-[1.5px] text-cream-white text-lg">
                The Electric Buffalo
            </p>

            <nav class="flex flex-wrap items-center gap-x-6 gap-y-2" aria-label="Pie de página">
                <x-link-nav :href="route('historia')">{{ __('Historia') }}</x-link-nav>
                <x-link-nav :href="route('banda')">{{ __('La Banda') }}</x-link-nav>
                <x-link-nav :href="route('discografia')">{{ __('Discografía') }}</x-link-nav>
                <x-link-nav :href="route('tienda')">{{ __('Tienda') }}</x-link-nav>
                <x-link-nav :href="route('contacto')">{{ __('Contacto') }}</x-link-nav>
            </nav>

            <a href="mailto:info@theelectricbuffalo.com"
                class="font-cuerpo text-sm font-semibold text-amber hover:text-amber/80 transition duration-200">info@theelectricbuffalo.com</a>
        </div>

        <div class="flex justify-center gap-3 mt-8">
            <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" target="_blank" aria-label="Facebook de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank" aria-label="Instagram de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank" aria-label="YouTube de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" aria-label="Bandcamp de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
            </a>
        </div>

        <div class="flex flex-wrap items-center justify-between gap-4 mt-[30px] pt-6 border-t border-[#463729]">
            <p class="text-xs text-[#B7A990]">&copy; {{ date('Y') }} The Electric Buffalo. Todos los derechos reservados.</p>
            <div class="flex gap-4">
                <a href="{{ route('politica') }}" class="text-xs text-[#B7A990] hover:text-amber transition duration-200">Política de privacidad</a>
                <a href="{{ route('cookies') }}" class="text-xs text-[#B7A990] hover:text-amber transition duration-200">Política de cookies</a>
            </div>
        </div>
    </div>
</footer>
