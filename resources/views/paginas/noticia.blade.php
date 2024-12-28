<x-app-layout>
    <div class=" my-20 w-[95%] md:w-[40%] mx-auto max-w-[1300px] min-w-[40%]">
        <h1 class="text-5xl mb-10">{{ $noticia->titulo }}</h1>
        <div class="flex flex-col">
            <img src="{{ asset($noticia->imagen ? 'storage/imagenes/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
                alt="imagen_{{ $noticia->id }}">
            <div class="space-y-8 mt-10 leading-7">
                <p class="text-3xl font-medium">{{ $noticia->intro }}</p>
                <p class="text-base text-custom-red italic">{{ $noticia->fecha_formateada }}</p>
                <p class="text-base">{!! $noticia->texto !!}</p>
            </div>
        </div>
        <div class="flex justify-end">
            <x-button :href="route('noticias')" class="mt-10">Volver</x-button>
        </div>

    </div>

</x-app-layout>
