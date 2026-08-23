<!-- ÚLTIMAS NOTICIAS EN LA PORTADA -->
@if ($noticias->count() > 0)
    <section class="max-w-home mx-auto px-[clamp(20px,4vw,48px)] py-[clamp(56px,7vw,96px)]">
        <h2 class="font-titulo font-black uppercase text-ink-heading text-[clamp(20px,2.2vw,26px)] tracking-[-0.015em] mb-10">Noticias</h2>

        <div class="flex flex-col gap-6">
            @foreach ($noticias as $noticia)
                <article class="flex flex-wrap gap-6 border-t border-rule-light pt-6">
                    <a href="{{ route('noticia.mostrar', $noticia->slug) }}" class="block flex-none w-full sm:w-[180px] aspect-[4/3] overflow-hidden">
                        <img src="{{ asset($noticia->imagen ? 'storage/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
                            alt="" class="w-full h-full object-cover hover:opacity-[.88] transition-opacity duration-200">
                    </a>
                    <div class="flex-1 min-w-[240px]">
                        <p class="font-cuerpo text-oxide text-xs font-bold tracking-[1.5px]">{{ $noticia->fecha_formateada }}</p>
                        <h3 class="font-titulo font-black uppercase text-ink-heading text-xl mt-2">
                            <a href="{{ route('noticia.mostrar', $noticia->slug) }}" class="hover:text-oxide transition-colors duration-200">{{ $noticia->titulo }}</a>
                        </h3>
                        <p class="text-ink-body text-[15px] leading-[1.7] mt-2 max-w-[66ch]">{{ $noticia->intro }}</p>
                        <a href="{{ route('noticia.mostrar', $noticia->slug) }}"
                            class="inline-block mt-3 font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">
                            Leer noticia <span class="sr-only">: {{ $noticia->titulo }}</span>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-10">
            <a href="{{ route('noticias') }}" class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Ver todas las noticias →</a>
        </div>
    </section>
@endif
