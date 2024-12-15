{{-- @extends('layouts.app')

@section('titulo')
    The Electric Buffalo
@endsection
@section('contenido')
    Contenido de esta página
@endsection --}}

<x-app-layout>
    <x-contenido :contenido='$contenido' />
    <section class="max-w-6xl mx-auto flex flex-col items-center gap-8 pb-20">
        <button
            class="pinchaAqui px-12 py-4 rounded bg-custom-red hover:bg-custom-red-darker text-white text-base">Escúchalo</button>
        <audio controls="" class="audiostyle hidden" controlslist="nodownload">
            <source src="/multimedia/A2-Patrolman.mp3" type="audio/mp3">
        </audio>
        <article class="flex content-around items-center gap-10">
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank">
                <img loading="lazy" src="img/youtuberecorte.png" alt="logo-youtube" class="w-20">

            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank">
                <img loading="lazy" src="/img/instagram_logo_2022..png" alt="logo-instagram" class="w-16 rounded-lg">
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                target="_blank">

                <img loading="lazy" src="/img/spotifty.png" alt="logo-spotify" class="w-16 rounded-lg">

            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank">
                <img loading="lazy" src="/img/bandcamp-button-circle-aqua-64.png" alt="logo-bandcamp" class="w-16">
            </a>

        </article>


    </section>

</x-app-layout>
