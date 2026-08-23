@props(['noticias'])

<div class="grid gap-[clamp(22px,3vw,34px)]" style="grid-template-columns: repeat(auto-fill, minmax(min(100%, 300px), 1fr)); align-items: start;">
    @foreach ($noticias as $noticia)
        <x-noticia :noticia="$noticia" />
    @endforeach
</div>

@if ($noticias->lastPage() > 1)
    <nav class="flex items-center justify-between border-t border-rule-light pt-[22px] mt-[clamp(22px,3vw,34px)]" aria-label="Paginación de noticias">
        @if ($noticias->onFirstPage())
            <span class="inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 border-2 border-ink rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-ink opacity-40">Anteriores</span>
        @else
            <a href="{{ $noticias->previousPageUrl() }}" class="inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 border-2 border-ink rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-ink hover:bg-ink hover:text-cream-white transition duration-[220ms] ease-in-out">Anteriores</a>
        @endif

        <p class="font-cuerpo text-xs font-semibold uppercase text-ink-muted">Página {{ $noticias->currentPage() }} de {{ $noticias->lastPage() }}</p>

        @if ($noticias->hasMorePages())
            <a href="{{ $noticias->nextPageUrl() }}" class="inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 border-2 border-ink rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-ink hover:bg-ink hover:text-cream-white transition duration-[220ms] ease-in-out">Siguientes</a>
        @else
            <span class="inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 border-2 border-ink rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-ink opacity-40">Siguientes</span>
        @endif
    </nav>
@endif
