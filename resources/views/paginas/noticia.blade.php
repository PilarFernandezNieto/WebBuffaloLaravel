<x-app-layout>
    <div class=" my-20 w-[95%] md:w-[35%] mx-auto max-w-[1300px]">
        <h1 class="text-5xl mb-10">{{ $noticia->titulo }}</h1>

        <div class="flex flex-col">
            <img src="{{ asset('/storage/imagenes/' . $noticia->imagen) }}" alt="">
            <div class="space-y-10 mt-10 leading-7">
                <p class="text-3xl font-medium">{{ $noticia->intro }}</p>
                <p class="text-base text-custom-red italic">{{ $noticia->fecha_formateada }}</p>
                <p class="text-base">{!! $noticia->texto !!}</p>
            </div>
        </div>
        <div class="flex justify-end">
            <x-button :href="url()->previous()" class="mt-10">Volver</x-button>
        </div>

    </div>

</x-app-layout>
