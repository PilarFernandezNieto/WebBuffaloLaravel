<x-app-layout pageTitle="Inicio">
    @isset($contenido)
        <x-contenido :contenido="$contenido" />
    @endisset

    <section class="flex flex-col items-center gap-8 py-10">
        <button
            class="pinchaAqui px-12 py-4 rounded bg-custom-red hover:bg-custom-red-darker text-white text-base transition duration-500 ease-in-out">Escúchalo</button>
        <audio controls="" class="audiostyle hidden" controlslist="nodownload">
            <source src="/multimedia/A2-Patrolman.mp3" type="audio/mp3">
        </audio>
        <div class="grid grid-cols-3 gap-10 items-center md:grid-cols-5">
            <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES"
                aria-label="Facebook de The Electric Buffalo" target="_blank"
                class="hover:scale-[1.1] transition duration-500 ease-in-out inline-block">
                <i class="fa-brands fa-facebook text-6xl text-facebook"></i>
            </a>
            <a href="https://www.youtube.com/@theelectricbuffalo666" aria-label="YouTube de The Electric Buffalo"
                target="_blank" class="hover:scale-[1.1] transition duration-500 ease-in-out inline-block">
                <i class="fa-brands fa-youtube text-6xl text-youtube"></i>

            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" aria-label="Instagram de The Electric Buffalo"
                target="_blank" class="hover:scale-[1.1] transition duration-500 ease-in-out inline-block">
                <i class="fa-brands fa-instagram text-6xl text-instagram"></i>


            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                aria-label="Spotify de The Electric Buffalo" target="_blank"
                class="hover:scale-[1.1] transition duration-500 ease-in-out inline-block">
                <i class="fa-brands fa-spotify text-6xl text-spotify"></i>

            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" aria-label="Bandcamp de The Electric Buffalo"
                target="_blank" class="hover:scale-[1.1] transition duration-500 ease-in-out inline-block">
                <i class="fa-brands fa-bandcamp text-6xl text-bandcamp"></i>

            </a>
        </div>

    </section>

    <section class="imagen-central flex flex-col justify-center py-20 relative">
        <div class="bg-slate-950 opacity-50 absolute top-0 left-0 h-full w-full"></div>
        <div class="py-4 text-center z-10">
            <h3 class="text-white text-4xl mb-12">Discografía del Búfalo Eléctrico</h3>
            <a href="{{ route('discografia') }}"
                class="bg-custom-red hover:bg-custom-red-darker rounded-md text-white mt-10 px-12 py-4 transition duration-500 ease-in-out">Discografía
                completa
            </a>
        </div>
    </section>


    <livewire:noticias-portada />

</x-app-layout>
