<x-app-layout pageTitle="Inicio">
    <x-contenido :contenido='$contenido' />

    <section class="flex flex-col items-center gap-8 pb-20">
        <button
            class="pinchaAqui px-12 py-4 rounded bg-custom-red hover:bg-custom-red-darker text-white text-base transition duration-500 ease-in-out">Escúchalo</button>
        <audio controls="" class="audiostyle hidden" controlslist="nodownload">
            <source src="/multimedia/A2-Patrolman.mp3" type="audio/mp3">
        </audio>
        <div class="grid grid-cols-3 gap-10 items-center md:grid-cols-5">
            <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" target="_blank">
                <img loading="lazy" src="img/logo_facebbok.png" alt="logo-youtube" class="w-16 hover:scale-[1.1] transition duration-500 ease-in-out">
            </a>
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank" >
                <img loading="lazy" src="img/youtuberecorte.png" alt="logo-youtube" class="w-16 hover:scale-[1.1] transition duration-500 ease-in-out">
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank" >
                <img loading="lazy" src="/img/instagram_logo_2022..png" alt="logo-instagram"
                    class="w-16 hover:scale-[1.1] transition duration-500 ease-in-out">
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                target="_blank">
                <img loading="lazy" src="/img/spotifty.png" alt="logo-spotify" class="w-16 rounded-lg hover:scale-[1.1] transition duration-500 ease-in-out">
            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" >
                <img loading="lazy" src="/img/bandcamp-button-circle-aqua-64.png" alt="logo-bandcamp"
                    class="w-16 hover:scale-[1.1] transition duration-500 ease-in-out">
            </a>
        </div>

    </section>

    <section class="imagen-central flex flex-col justify-center py-20 relative">
        <div class="bg-slate-950 opacity-50 absolute top-0 left-0 h-full w-full"></div>
        <div class="py-4 text-center z-10">
            <h3 class="text-white text-4xl mb-12">Discografía del Búfalo Eléctrico</h3>
            <a href="{{ route('discografia') }}"
                class="bg-custom-red hover:bg-custom-red-darker rounded-md text-white mt-10 px-12 py-4 transition duration-500 ease-in-out">Pincha aquí</a>
        </div>
    </section>


        <livewire:noticias-portada />

</x-app-layout>
