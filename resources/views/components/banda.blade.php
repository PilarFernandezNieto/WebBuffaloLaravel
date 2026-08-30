@foreach ($musicos as $musico)
    <article
        class="flex flex-col flex-wrap md:flex-row gap-6 p-4 border-t border-rule-light {{ $loop->last ? 'border-b' : '' }}">

        {{-- RETRATO --}}
        <div class="flex-none w-full md:w-[clamp(300px,10vw,350px)]">
            <img src="{{ asset($musico->imagen ? 'storage/' . $musico->imagen : 'img/no-imagen.jpg') }}"
                alt="{{ $musico->nombre }}" class="w-full aspect-square object-cover">
            @if ($musico->fotografo and $musico->imagen)
                <p class="text-xs font-titulo italic text-ink-muted pt-[7px]">Foto de {{ $musico->fotografo }}</p>
            @endif
        </div>

        {{-- TEXTO --}}
        <div class="flex-1 min-w-0">
            <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                <h2 class="font-titulo font-black uppercase text-ink-heading text-xl">{{ $musico->nombre }}
                    {{ $musico->apellidos }}</h2>
                @if ($musico->alias)
                    <span class="font-titulo italic font-bold text-oxide">"{{ $musico->alias }}"</span>
                @endif
                @if ($musico->origen)
                    <span
                        class="font-cuerpo text-xs font-bold uppercase tracking-[1.3px] text-ink-muted">{{ $musico->origen }}</span>
                @endif
            </div>
            <div class="mt-3 space-y-4 text-base leading-normal text-ink-body max-w-2xl">
                {!! $musico->biografia !!}
            </div>
        </div>
    </article>
@endforeach
