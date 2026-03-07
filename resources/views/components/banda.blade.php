@foreach ($musicos as $musico)
    <div x-data="{ open: false }" class="flex flex-col">

        {{-- FOTO --}}
        <div class="overflow-hidden rounded-lg cursor-pointer" @click="open = !open">
            <img src="{{ asset($musico->imagen ? 'storage/' . $musico->imagen : 'img/no-imagen.jpg') }}"
                alt="{{ $musico->nombre }}" class="w-full h-auto transition-transform duration-500 hover:scale-105">
        </div>

        {{-- IDENTIDAD --}}
        <div class="mt-4 flex items-start justify-between">
            <div>
                <h2 class="text-xl font-medium text-gray-900">
                    {{ $musico->nombre }} {{ $musico->apellidos }}
                </h2>
                @if ($musico->alias)
                    <p class="text-sm text-custom-red font-medium">"{{ $musico->alias }}"</p>
                @endif
                @if ($musico->origen)
                    <p class="text-xs text-gray-400 mt-1">{{ $musico->origen }}</p>
                @endif
            </div>

            {{-- TOGGLE --}}
            <button @click="open = !open"
                class="text-sm text-custom-red hover:text-custom-red-darker transition-colors mt-1 flex items-center gap-1">
                <span x-text="open ? '− Cerrar' : '+ Bio'"></span>
            </button>
        </div>

        {{-- CRÉDITO FOTO --}}
        @if ($musico->fotografo)
            <p class="text-xs text-gray-400 italic mt-1">Foto de {{ $musico->fotografo }}</p>
        @endif

        {{-- BIO DESPLEGABLE --}}
        <div x-show="open" x-transition
            class="bg-white border border-gray-100 shadow-sm rounded-lg p-5 mt-4 leading-7 text-base text-gray-700">
            {!! $musico->biografia !!}
        </div>

    </div>
@endforeach
