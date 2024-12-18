<div class="max-w-7xl mx-auto my-12">
    <h2 class="text-4xl text-center mb-12 font-medium">Noticias</h2>
    <div class="noticias-portada md:grid md:grid-cols-3 gap-8 ">
        @foreach ($noticias as $noticia)
            <x-noticia :noticia="$noticia" />
        @endforeach
    </div>
    <div class="flex justify-end">
        <a href="" class="bg-custom-red hover:bg-custom-red-darker rounded-md text-white mt-10 py-4 px-8 ">Ver
            todas</a>
    </div>
</div>
