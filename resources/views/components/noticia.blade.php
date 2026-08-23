@props(['noticia', 'headingTag' => 'h2'])

<article class="flex flex-col bg-cream-field border border-rule-light">

    <a href="{{ route('noticia.mostrar', $noticia) }}"
        class="block overflow-hidden hover:opacity-[.88] transition-opacity duration-200">
        <img src="{{ asset($noticia->imagen ? 'storage/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
            alt="{{ $noticia->titulo }}" class="w-full h-full object-cover">
    </a>

    <div class="flex flex-col flex-1 px-[clamp(18px,2.5vw,26px)] pt-6 pb-7">
        <time
            class="font-cuerpo text-oxide text-xs font-bold tracking-[1.5px] mb-3">{{ str_replace('-', '·', $noticia->fecha_formateada) }}</time>

        <{{ $headingTag }}
            class="font-titulo font-black uppercase text-ink-heading text-[clamp(19px,2vw,21px)] leading-[1.15] tracking-[-0.02em] mb-3 text-pretty min-h-[80px]">
            <a href="{{ route('noticia.mostrar', $noticia) }}"
                class="hover:text-oxide transition-colors duration-200 ">{{ $noticia->titulo }}</a>
            </{{ $headingTag }}>

            <p class="text-ink-body text-[15px] leading-[1.7] mb-4 text-pretty min-h-[50px]">{{ $noticia->intro }}</p>

            <a href="{{ route('noticia.mostrar', $noticia) }}"
                class="mt-auto inline-flex items-center min-h-[44px] font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">
                Lee más
                <span class="sr-only">: {{ $noticia->titulo }}</span>
            </a>
    </div>
</article>
