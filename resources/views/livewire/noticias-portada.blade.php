<!-- LISTADO DE 3 NOTICIAS EN LA ZONA PÚBLICA-->
<div class="w-95p md:w-85p max-w-1300px mx-auto my-10 bg-white rounded-lg px-0 py-8 md:px-8 shadow-md">
    @if ($noticias->count() > 0)

            <h2 class="text-4xl text-center mb-12 font-medium">Noticias</h2>
            <div class="noticias-portada md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 ">
                @foreach ($noticias as $noticia)
                    <x-noticia :noticia="$noticia" />
                @endforeach
            </div>
            <div class="flex justify-end">
                <x-button :href="route('noticias')" class="mt-10">Ver todas</x-button>
            </div>

    @endif
</div>
