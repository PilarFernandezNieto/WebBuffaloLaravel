<x-app-layout>
    <div class=" my-20 w-[95%] md:w-[80%] mx-auto max-w-[1300px]">
        <h1 class="text-5xl font-medium mb-10">{{ $disco->nombre }}</h1>
        <div class="md:grid md:grid-cols-2 leading-7">
            <div>
                {!! $disco->informacion !!}
            </div>
            <div class="mt-4 md:mt-0">
                <img src="{{ asset('storage/imagenes/' . $disco->imagen) }}" alt="">
            </div>

        </div>
        <div class="flex justify-start">
            <x-button :href="route('discos')" class="mt-10">Volver</x-button>
        </div>
        <div>
</x-app-layout>
