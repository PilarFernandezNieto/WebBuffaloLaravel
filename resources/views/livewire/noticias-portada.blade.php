<div class="noticias-portada md:grid md:grid-cols-3 gap-8 max-w-7xl mx-auto my-20">
    @foreach ($noticias as $noticia )
        <x-noticia :noticia="$noticia" />
    @endforeach

</div>
