@props(['eyebrow', 'eyebrowHref' => null, 'title'])

<div class="flex flex-wrap gap-4 items-end justify-between mb-[clamp(20px,2.5vw,28px)]">
    <div class="min-w-0">
        <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-2">
            @if ($eyebrowHref)
                <a href="{{ $eyebrowHref }}" class="hover:text-oxide-hover">{{ $eyebrow }}</a>
            @else
                {{ $eyebrow }}
            @endif
        </p>
        <h1
            class="font-titulo font-black uppercase text-ink-heading leading-[1.05] tracking-[-0.02em] text-[clamp(26px,3.2vw,36px)] m-0">
            {{ $title }}
        </h1>
    </div>

    @if (trim($slot ?? '') !== '')
        <div class="shrink-0">
            {{ $slot }}
        </div>
    @endif
</div>
