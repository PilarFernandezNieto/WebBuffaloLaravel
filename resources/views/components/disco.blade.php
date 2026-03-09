@props(['disco'])

<article x-data="{ open: false }" class="relative rounded-xl overflow-hidden shadow-lg max-w-[600px] w-full mx-auto">

    {{-- IMAGEN DE FONDO --}}
    <div class="relative">
        <img src="{{ asset($disco->imagen ? 'storage/' . $disco->imagen : 'img/no-imagen.jpg') }}"
            alt="portada_{{ $disco->nombre }}" class="w-full h-64 object-cover object-top">
        {{-- OVERLAY --}}
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>

        {{-- TÍTULO ENCIMA DE LA IMAGEN --}}
        <div class="absolute bottom-0 left-0 p-8">
            <p class="text-custom-amber text-sm font-medium mb-1">{{ $disco->anio_edicion }}</p>
            <h2 class="text-4xl font-medium text-white leading-snug">{{ $disco->nombre }}</h2>
            <button @click="open = !open"
                class="mt-4 inline-flex items-center gap-2 bg-custom-red hover:bg-custom-red-darker text-white text-sm font-medium px-5 py-2.5 rounded transition-colors duration-300">
                <span x-text="open ? '− Cerrar' : '+ Leer más'"></span>
            </button>
        </div>
    </div>

    {{-- TEXTO DESPLEGABLE --}}

    <div x-show="open" x-transition class="bg-white px-8 py-6 informacion text-base leading-7 text-gray-800 space-y-4">
        {!! $disco->textos !!}
        <div class="pt-4">
            <x-button :href="route('discografia.mostrar', $disco->id)">Ver ficha</x-button>
        </div>
    </div>

</article>
