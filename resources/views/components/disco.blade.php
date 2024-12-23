<div>
    <section class="md:grid md:grid-cols-3 gap-4 my-8">
        <div class="mb-4 md:mb-0 md:col-span-1">
            <img src="{{ asset('storage/imagenes/' . $disco->imagen) }}" alt="">
        </div>
        <div class="md:col-span-2 leading-7">
            <h2 class="text-custom-red text-3xl font-medium">{{ $disco->nombre }}</h2>
            {!! $disco->textos !!}
            <div class="flex justify-start">
                <x-button :href="route('disco.mostrar', $disco->id)" class="mt-10">Ver ficha</x-button>
            </div>
    </section>
</div>
