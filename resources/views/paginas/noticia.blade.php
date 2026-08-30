<x-app-layout pageTitle="{!! $noticia->titulo !!}">

    {{-- MIGAS DE PAN --}}
    <nav aria-label="Migas de pan"
        class="max-w-content mx-auto px-edge pt-[clamp(20px,3vw,30px)] flex flex-wrap items-center gap-[10px] font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-ink-muted">
        <a href="{{ route('noticias') }}" class="hover:text-oxide transition-colors duration-200">Noticias</a>
        <span aria-hidden="true">/</span>
        <span>{{ $noticia->titulo }}</span>
    </nav>

    <article class="max-w-content mx-auto px-edge pt-[clamp(24px,3vw,36px)] pb-section">

        {{-- CABECERA --}}
        <header class="max-w-[66ch] mb-[clamp(28px,3.5vw,40px)]">
            <p class="font-cuerpo text-oxide text-xs font-bold tracking-[1.5px] mb-3">
                {{ str_replace('-', '·', $noticia->fecha_formateada) }}</p>
            <h1
                class="font-titulo font-black uppercase text-ink-heading text-[clamp(28px,3.6vw,44px)] leading-[1.02] tracking-[-0.025em] mb-4 text-pretty">
                {{ $noticia->titulo }}
            </h1>
            <p class="text-ink-body text-[clamp(17px,1.8vw,19px)] leading-[1.65] text-pretty">{{ $noticia->intro }}</p>
        </header>

        {{-- FOTO + CUERPO --}}
        <div class="flex flex-wrap gap-[clamp(28px,4vw,48px)] items-start">
            <img src="{{ asset($noticia->imagen ? 'storage/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
                alt="{{ $noticia->titulo }}"
                class="flex-none w-[clamp(220px,30vw,360px)] aspect-square object-cover shadow-[0_14px_34px_rgba(61,49,42,0.24)]">
            <div
                class="flex-1 basis-[380px] min-w-0 contenido text-ink-body text-base leading-[1.8] max-w-[66ch] space-y-[18px]">
                {!! $noticia->texto !!}
            </div>
        </div>
    </article>

    {{-- OTRAS NOTICIAS --}}
    @php
        $otras = \App\Models\Noticia::where('id', '!=', $noticia->id)->orderBy('fecha', 'desc')->limit(2)->get();
    @endphp
    <section class="max-w-content mx-auto px-edge pb-[clamp(48px,6vw,76px)]">
        <p
            class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-5 pt-[clamp(24px,3vw,32px)] border-t border-rule-light">
            Otras noticias</p>

        @if ($otras->count())
            <div class="flex flex-wrap gap-[clamp(16px,2.5vw,28px)]">
                @foreach ($otras as $otra)
                    <a href="{{ route('noticia.mostrar', $otra->slug) }}"
                        class="flex-1 basis-[240px] min-w-0 block p-[18px] border border-rule-light rounded-sharp hover:bg-cream-hover hover:border-rule-input transition duration-[220ms] ease-in-out">
                        <span
                            class="block font-cuerpo text-oxide text-xs font-bold tracking-[1.5px] mb-2">{{ str_replace('-', '·', $otra->fecha_formateada) }}</span>
                        <span
                            class="block font-titulo font-black uppercase text-ink-heading text-[17px] leading-[1.2] tracking-[-0.015em] text-pretty">{{ $otra->titulo }}</span>
                    </a>
                @endforeach
            </div>
        @endif

        <p class="mt-[clamp(28px,3.5vw,40px)]">
            <a href="{{ route('noticias') }}"
                class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Ver
                todas</a>
        </p>
    </section>
</x-app-layout>
