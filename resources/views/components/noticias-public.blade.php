<!--LISTADO NOTICIAS ZONA PÚBLICA -->

<div class="w-95p md:w-85p max-w-1300px mx-auto my-10 bg-white rounded-lg px-0 py-8 md:px-8 shadow-md">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($noticias as $noticia)
            <x-noticia :noticia="$noticia" />
        @endforeach
    </div>


    <div class="mt-4">
        {{ $noticias->links() }}
    </div>

</div>
