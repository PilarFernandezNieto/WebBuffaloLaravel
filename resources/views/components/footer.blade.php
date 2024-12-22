<div class="flex flex-col p-4 bg-black items-center justify-around mt-10">
    <nav class="flex flex-col md:flex-row gap-2 my-8">
        <x-link-nav :href="route('admin.musicos.index')" :active="request()->routeIs('admin.musicos.index')">
            {{ __('Musicos') }}
        </x-link-nav>
        <x-link-nav :href="route('admin.noticias.index')" :active="request()->routeIs('admin.noticias.index')">
            {{ __('Noticias') }}
        </x-link-nav>
        <x-link-nav :href="route('admin.musicos.index')" :active="request()->routeIs('admin.musicos.index')">
            {{ __('Musicos') }}
        </x-link-nav>
        <x-link-nav :href="route('admin.noticias.index')" :active="request()->routeIs('admin.noticias.index')">
            {{ __('Noticias') }}
        </x-link-nav>
    </nav>
    <div class=" flex text-custom-white text-end text-4xl space-x-3 items-center">

        <a href="https://www.youtube.com/@theelectricbuffalo666" class="youtube" target="_blank">
            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
        </a>
        <a href="https://www.instagram.com/theelectricbuffalo/" class="insta" target="_blank">
            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
            target="_blank">
            <i class="fa-brands fa-spotify" aria-hidden="true"></i>
        </a>
        <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank">
            <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
        </a>

    </div>
    <div class="contacto my-8">
        <a href="mailto:theelectricbuffalo.com" target="_blank" class="text-white hover:text-custom-red text-2xl md:text-4xl">info@theelectricbuffalo.com</a>
    </div>
    <p class="text-white text-sm text-center">The Electric Buffalo. Todos los derechos reservados</p>

</div>
