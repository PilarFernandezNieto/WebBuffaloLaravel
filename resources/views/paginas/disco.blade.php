<x-app-layout pageTitle="{!! $disco->nombre !!}">
    <div class="my-10 w-95p lg:w-4/5 mx-auto max-w-1300px space-y-8">

        {{-- IMAGEN DE FONDO CON TÍTULO --}}
        <div class="relative rounded-lg overflow-hidden shadow-lg">
            <img src="{{ asset($disco->imagen ? 'storage/imagenes/' . $disco->imagen : 'img/no-imagen.jpg') }}"
                alt="portada_{{ $disco->nombre }}" class="w-full h-96 object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-8">
                <p class="text-custom-amber text-sm font-medium mb-1">{{ $disco->anio_edicion }}</p>
                <h1 class="text-4xl font-medium text-white leading-snug">{{ $disco->nombre }}</h1>
            </div>
        </div>

        {{-- TEXTO --}}
        <div class="informacion text-base leading-7 text-gray-800 space-y-4">
            {!! $disco->informacion !!}
        </div>

        {{-- VOLVER --}}
        <div class="flex justify-start pt-4 border-t border-gray-100">
            <x-button :href="route('discografia')">← Volver</x-button>
        </div>

    </div>

    @push('styles')
        <style>
            .informacion li::before {
                content: "\f005";
                font-family: "Font Awesome 6 Free";
                font-weight: 900;
                position: absolute;
                left: 0;
                color: #AC2C28;
            }

            .informacion li {
                position: relative;
                padding-left: 25px;
            }
        </style>
    @endpush

</x-app-layout>
