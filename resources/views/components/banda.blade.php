<!-- Componente de la banda -->

@foreach ($musicos as $musico)
    <div x-data="{ open: false }" class="w-full p-0 flex flex-col">
        <a @click="open = !open" class="inline-block cursor-pointer">
            <figure class="relative">
                <img src="{{ asset($musico->imagen ? '/storage/imagenes/' . $musico->imagen : 'img/no-imagen.jpg') }}" class="rounded w-full h-auto"
                    alt="{{$musico->nombre}}" title="{{$musico->nombre}}">
                <figcaption class="text-right text-sm italic mb-2 md:mb-0">
                    Foto de {{$musico->fotografo}}
                </figcaption>
            </figure>
        </a>
        <div x-show="open" x-transition class="bg-white border border-gray-200 shadow-md rounded-lg p-4 my-3 leading-7">
          {!!$musico->biografia!!}
        </div>
    </div>
@endforeach
