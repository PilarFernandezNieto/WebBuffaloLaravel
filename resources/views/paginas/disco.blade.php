<x-app-layout pageTitle="{!!$disco->nombre!!}">
    <div class=" my-20 w-95p lg:w-4/5 mx-auto max-w-1300px">
        <h1 class="text-5xl font-medium mb-10">{{ $disco->nombre }}</h1>
        <div class="md:grid md:grid-cols-2 leading-7 relative">
            <div class="informacion">
                {!! $disco->informacion !!}
            </div>
            <div class="mt-4 md:mt-0">
                <img src="{{asset( $disco->imagen ? 'storage/imagenes/' . $disco->imagen : 'img/no-imagen.jpg') }}" alt="portada_{{$disco->nombre}}"
                    class="w-full h-auto">
            </div>


        </div>
        <div class="flex justify-start">
            <x-button :href="route('discografia')" class="mt-10">Volver</x-button>
        </div>

        <div>
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
