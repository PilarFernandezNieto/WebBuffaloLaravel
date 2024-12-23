<div
    class="rounded-lg relative border border-black hover:shadow-md hover:shadow-gray-600 transition-shadow duration-500 mb-4 md:mb-0">
    <img src="{{ asset('storage/imagenes/' . $disco->imagen) }}" alt="{{ $disco->nombre }}"
        class="rounded-t-lg max-w-full h-auto">
    <div class="datos-producto p-4">
        <h3 class="text-3xl mb-5 flex font-medium min-h-20">{{ $disco->nombre }}</h3>
        <div class="detalle-disco ">
            <p class="text-lg mb-2 uppercase ">{{ $disco->formato->nombre }}</p>
            <p class="text-lg mb-2">{{ $disco->precio_formateado }}</p>
        </div>
        <x-button :href="route('disco.mostrar', $disco)" class="mt-4  w-full font-bold justify-center" disabled>AGOTADO</x-button>
    </div>


</div>
