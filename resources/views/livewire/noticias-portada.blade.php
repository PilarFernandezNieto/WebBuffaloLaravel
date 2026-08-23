<!-- ÚLTIMAS NOTICIAS EN LA PORTADA -->
@if ($noticias->count() > 0)
    <section class="max-w-home mx-auto px-edge-home py-section-lg">
        <h2
            class="font-titulo font-black uppercase text-ink-heading text-[clamp(26px,3.4vw,36px)] tracking-[-0.015em] mb-[clamp(30px,4vw,46px)]">
            Noticias</h2>

        <div class="grid gap-[clamp(24px,3.5vw,34px)] items-start"
            style="grid-template-columns: repeat(auto-fit, minmax(min(100%, 280px), 1fr));">
            @foreach ($noticias as $noticia)
                <x-noticia :noticia="$noticia" heading-tag="h3" />
            @endforeach
        </div>

        <p class="mt-[clamp(30px,4vw,44px)]">
            <a href="{{ route('noticias') }}"
                class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Ver
                todas</a>
        </p>
    </section>
@endif
