<div
    class="rounded-lg relative border border-black hover:shadow-md hover:shadow-gray-600 transition-shadow duration-500 mb-4 md:mb-0">
    <img src="{{ asset($camiseta->imagen ? 'storage/imagenes/' . $camiseta->imagen : 'img/no-imagen.jpg') }}"
        alt="{{ $camiseta->nombre }}" class="rounded-t-lg max-w-full h-auto">
    <div class="datos-producto p-4">
        <h3 class="text-3xl mb-5 flex font-medium min-h-12">{{ $camiseta->nombre }}</h3>
        <div class="detalle-camiseta ">
            <div class="text-lg mb-2">{!! $camiseta->informacion !!}</div>
            <p class="text-lg mb-2 uppercase ">Talla: {{ $camiseta->talla->nombre }}</p>
            <p class="text-lg mb-2">{{ $camiseta->precio_formateado }}</p>
        </div>
        <x-button class="mt-4  w-full font-bold justify-center" disabled>{{$camiseta->stock > 0 ? 'DISPONIBLE' : 'AGOTADO'}}</x-button>
    </div>
</div>
