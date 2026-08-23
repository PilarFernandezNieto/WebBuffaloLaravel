@props(['noticia'])

<article class="flex flex-col border-t border-rule-light pt-5">

    <a href="{{ route('noticia.mostrar', $noticia) }}" class="block aspect-[4/3] overflow-hidden">
        <img src="{{ asset($noticia->imagen ? 'storage/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
            alt="{{ $noticia->titulo }}" class="w-full h-full object-cover hover:opacity-[.88] transition-opacity duration-200">
    </a>

    <p class="font-cuerpo text-oxide text-xs font-bold tracking-[1.5px] mt-4">{{ str_replace('-', '·', $noticia->fecha_formateada) }}</p>

    <h2 class="font-titulo font-black uppercase text-ink-heading text-[clamp(19px,2.2vw,23px)] leading-tight mt-2">
        <a href="{{ route('noticia.mostrar', $noticia) }}" class="hover:text-oxide transition-colors duration-200">{{ $noticia->titulo }}</a>
    </h2>

    <p class="text-ink-body text-[15px] leading-[1.7] mt-2">{{ $noticia->intro }}</p>

    <a href="{{ route('noticia.mostrar', $noticia) }}"
        class="mt-auto pt-4 font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">
        Leer noticia
    </a>
</article>
