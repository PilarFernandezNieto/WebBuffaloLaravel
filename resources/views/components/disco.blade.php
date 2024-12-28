<div>
    <section class="md:grid md:grid-cols-3 gap-8 my-12">
        <div class="mb-4 md:mb-0 md:col-span-1">
            <img src="{{ asset($disco->imagen ? 'storage/imagenes/' . $disco->imagen : 'img/no-imagen.jpg') }}" alt="portada_{{$disco->nombre}}"
                class="w-full h-auto">
        </div>
        <div class="md:col-span-2 leading-7">
            <h2 class="text-custom-red text-3xl font-medium mb-8">{{ $disco->nombre }}</h2>
            {!! $disco->textos !!}
            <div class="flex justify-start">
                <x-button :href="route('discografia.mostrar', $disco->id)" class="mt-10">Ver ficha</x-button>
            </div>
    </section>
</div>

