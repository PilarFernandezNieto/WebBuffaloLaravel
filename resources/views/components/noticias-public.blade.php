<!--LISTADO NOTICIAS ZONA PÚBLICA -->

<div class="my-12 bg-white rounded-lg py-2 px-4 shadow-md">
    <div class="noticias-portada md:grid md:grid-cols-3 gap-8 ">
        @foreach ($noticias as $noticia)
            <x-noticia :noticia="$noticia" />
        @endforeach
    </div>
</div>
