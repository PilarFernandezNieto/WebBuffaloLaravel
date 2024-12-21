@foreach ($musicos as $musico)
    <div x-data="{ open: false }" class="w-full p-0 flex flex-col">
        <a @click="open = !open" class="inline-block cursor-pointer">
            <figure class="relative">
                <img src="{{ asset('/storage/imagenes/' . $musico->imagen) }}" class="rounded w-full h-auto"
                    alt="{{$musico->nombre}}" title="{{$musico->nombre}}">
                <figcaption class="text-right text-sm italic mt-2">
                    Foto de Paco Vigil
                </figcaption>
            </figure>
        </a>
        <div x-show="open" x-transition class="bg-white border border-gray-200 shadow-md rounded-lg p-4 my-3 leading-7">
          {!!$musico->biografia!!}
        </div>
    </div>
@endforeach
