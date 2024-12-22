<div class="bg-custom-amber rounded-sm relative hover:shadow-md hover:shadow-custom-red transition-shadow duration-500">
    <img src="{{ asset('storage/imagenes/' . $noticia->imagen) }}" alt="noticia{{ $noticia->id }}" class="rounded-t-lg max-w-full h-auto">
    <div class="contenido-noticias border border-gray-100 p-5">
        <h3 class="text-custom-red text-3xl mb-5 min-h-28 flex font-medium">{{$noticia->titulo}}</h3>
        <div class="texto-noticia ">
            <h4 class="text-2xl mb-4 min-h-24">{{$noticia->intro}}</h4>
            <div class="texto text-base my-6 min-h-32">
                {!! Str::limit($noticia->texto, 175)!!}
            </div>
            <p class="fecha flex justify-end text-custom-red italic">{{$noticia->fecha_formateada}}</p>

        </div>
    </div>
    <a href="{{route('noticia.mostrar', $noticia)}}" class="bg-custom-red hover:bg-custom-red-darker rounded-md text-white mt-10 py-4 px-8 absolute bottom-4 left-4">Más info</a>
</div>
