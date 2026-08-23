@foreach ($musicos as $musico)
    <article class="flex flex-wrap gap-[clamp(20px,3vw,36px)] py-[clamp(26px,3.5vw,36px)] border-t border-rule-light {{ $loop->last ? 'border-b' : '' }}">

        {{-- RETRATO --}}
        <div class="flex-none w-[clamp(120px,14vw,168px)]">
            <img src="{{ asset($musico->imagen ? 'storage/' . $musico->imagen : 'img/no-imagen.jpg') }}"
                alt="{{ $musico->nombre }}" class="w-full aspect-square object-cover">
            @if ($musico->fotografo)
                <p class="text-[11px] font-titulo italic text-ink-muted pt-[7px]">Foto de {{ $musico->fotografo }}</p>
            @endif
        </div>

        {{-- TEXTO --}}
        <div class="flex-1 min-w-[320px]">
            <div class="flex flex-wrap items-baseline gap-x-[14px] gap-y-1">
                <h2 class="font-titulo font-black uppercase text-ink-heading text-xl">{{ $musico->nombre }} {{ $musico->apellidos }}</h2>
                @if ($musico->alias)
                    <span class="font-titulo italic font-bold text-oxide">"{{ $musico->alias }}"</span>
                @endif
                @if ($musico->origen)
                    <span class="font-cuerpo text-[11px] font-bold uppercase tracking-[1.3px] text-ink-muted">{{ $musico->origen }}</span>
                @endif
            </div>
            <div class="mt-3 space-y-4 text-[15px] leading-[1.72] text-ink-body max-w-[70ch]">
                {!! $musico->biografia !!}
            </div>
        </div>
    </article>
@endforeach
