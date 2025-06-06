<div class="flex flex-col p-4 bg-black items-center justify-around mt-10">
    <nav class="flex flex-col md:flex-row gap-2 my-8 items-center">

        <x-link-nav :href="route('historia')">
            {{ __('Historia') }}
        </x-link-nav>
        <x-link-nav :href="route('banda')">
            {{ __('La Banda') }}
        </x-link-nav>
        <x-link-nav :href="route('discografia')">
            {{ __('Discografía') }}
        </x-link-nav>
        <x-link-nav :href="route('tienda')">
            {{ __('Tienda') }}
        </x-link-nav>
        <x-link-nav :href="route('contacto')">
            {{ __('Contacto') }}
        </x-link-nav>
    </nav>
    <div class=" flex text-custom-white text-end text-4xl space-x-3 items-center">
        <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" class="hover:text-custom-red transition-all duration-500" target="_blank" aria-label="Icono Facebook">
            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="https://www.youtube.com/@theelectricbuffalo666" class="hover:text-custom-red transition-all duration-500" target="_blank" aria-label="Icono Youtube">
            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/theelectricbuffalo/" class="hover:text-custom-red transition-all duration-500" target="_blank" aria-label="Icono Instagram">
            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
            target="_blank" class="hover:text-custom-red transition-all duration-500" aria-label="Icono Spotify">
            <i class="fa-brands fa-spotify" aria-hidden="true"></i>
        </a>
        <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" class="hover:text-custom-red transition-all duration-500" aria-label="Icono Bandcamp">
            <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
        </a>

    </div>
    <div class="contacto my-8">
        <a href="mailto:theelectricbuffalo.com" target="_blank"
            class="text-white hover:text-custom-red text-2xl md:text-4xl transition-all duration-500">info@theelectricbuffalo.com</a>
    </div>
    <p class="text-white text-sm text-center"> &copy; {{ date('Y') }} The Electric Buffalo. Todos los derechos reservados.</p>
    <div class="mt-4 flex gap-2">
        <a href="{{route('politica')}}" class="text-custom-white text-xs hover:font-semibold transition-all duration-500">Política de privacidad</a>
        <a href="{{route('cookies')}}" class="text-custom-white text-xs  hover:font-semibold transition-all duration-500">Política de cookies</a>
    </div>

</div>
