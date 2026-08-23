@props(['active'])

{{-- ENLACES MENÚ ZONA PÚBLICA --}}

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center pb-1 border-b-2 border-[#C09A3E] font-cuerpo text-[clamp(12px,1.3vw,13px)] font-semibold uppercase tracking-[1px] text-amber focus:outline-none transition duration-200 ease-in-out'
            : 'inline-flex items-center pb-1 border-b-2 border-transparent font-cuerpo text-[clamp(12px,1.3vw,13px)] font-semibold uppercase tracking-[1px] text-cream/90 hover:text-amber focus:outline-none transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} @if($active ?? false) aria-current="page" @endif>
    {{ $slot }}
</a>
