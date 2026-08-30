@props(['disco'])

<article class="flex flex-wrap gap-[clamp(20px,3vw,36px)] py-[clamp(28px,3.5vw,40px)] border-t border-rule-light">

    {{-- PORTADA --}}
    <a href="{{ route('discografia.mostrar', $disco->slug) }}" class="group flex-none w-[clamp(140px,17vw,208px)]">
        <div
            class="aspect-square overflow-hidden shadow-[0_8px_22px_rgba(61,49,42,0.16)] group-hover:shadow-[0_16px_36px_rgba(61,49,42,0.28)] transition-shadow duration-[260ms] ease-in-out">
            <img src="{{ asset($disco->imagen ? 'storage/' . $disco->imagen : 'img/no-imagen.jpg') }}"
                alt="Portada de {{ $disco->nombre }}"
                class="w-full h-full object-cover group-hover:-translate-y-1 transition-transform duration-[260ms] ease-in-out">
        </div>
    </a>

    {{-- TEXTO --}}
    <div class="flex-1 min-w-[340px]">
        <p class="font-titulo italic text-oxide text-sm font-semibold">
            {{ $disco->anio_edicion }}@if ($disco->sello)
                &middot; {{ $disco->sello }}
            @endif
        </p>
        <h2
            class="font-titulo font-black uppercase text-ink-heading text-[clamp(19px,2.4vw,28px)] leading-tight tracking-[-0.02em] mt-1">
            <a href="{{ route('discografia.mostrar', $disco->slug) }}"
                class="hover:text-oxide transition-colors duration-200">{{ $disco->nombre }}</a>
        </h2>
        <div class="mt-3 text-base leading-[1.7] text-ink-body max-w-[70ch] line-clamp-[6]">
            {!! $disco->textos !!}
        </div>
        <x-button :href="route('discografia.mostrar', $disco->slug)" class="mt-5">Ver ficha</x-button>
    </div>
</article>
