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
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank" class="w-full md:w-auto">
                <img loading="lazy" src="img/youtuberecorte.png" alt="logo-youtube" class="w-20 mx-auto">
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank" class="w-full md:w-auto">
                <img loading="lazy" src="/img/instagram_logo_2022..png" alt="logo-instagram" class="w-16 rounded-lg mx-auto">
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw" target="_blank" class="w-full md:w-auto">
                <img loading="lazy" src="/img/spotifty.png" alt="logo-spotify" class="w-16 rounded-lg mx-auto">
            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" class="w-full md:w-auto">
                <img loading="lazy" src="/img/bandcamp-button-circle-aqua-64.png" alt="logo-bandcamp" class="w-16 mx-auto">
            </a>
        </div>

    </section>

    <section class="imagen-central flex flex-col justify-center py-20 relative">
        <div class="bg-slate-950 opacity-50 absolute top-0 left-0 h-full w-full"></div>
        <div class="py-4 text-center z-10">
            <h3 class="text-white text-4xl mb-12">Discografía del Búfalo Eléctrico</h3>
            <a href="/discografia" class="bg-custom-red hover:bg-custom-red-darker rounded-md text-white mt-10 px-12 py-4">Pincha aquí</a>
        </div>
    </section>

    <livewire:noticias-portada />




</x-app-layout>

