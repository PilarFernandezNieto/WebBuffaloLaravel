<x-app-layout pageTitle="{!! $noticia->titulo !!}">
    <div class="my-20 w-95p lg:w-2/5 mx-auto max-w-1300px min-w-[40%] bg-white rounded-lg p-4 md:p-8 shadow-md">

        {{-- CABECERA --}}
        <h1 class="text-4xl font-medium text-custom-red leading-snug mb-6">
            {{ $noticia->titulo }}
        </h1>

        {{-- IMAGEN --}}
        <img src="{{ asset($noticia->imagen ? 'storage/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
            alt="{{ $noticia->titulo }}" class="w-full rounded-lg mb-8">
        {{-- CONTENIDO --}}
        <div class="space-y-8 leading-7">
            <p class="text-2xl font-medium text-gray-700">{{ $noticia->intro }}</p>
            <p class="text-base">{!! $noticia->texto !!}</p>
        </div>

        {{-- FOOTER --}}
        <div class="flex items-center justify-between mt-10 pt-4 border-t border-gray-100">
            <time class="text-xs text-gray-400 italic">{{ $noticia->fecha_formateada }}</time>
            <x-button :href="route('noticias')">← Volver</x-button>
        </div>

    </div>
</x-app-layout>
