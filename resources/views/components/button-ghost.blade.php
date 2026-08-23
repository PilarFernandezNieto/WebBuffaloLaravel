@props(['dark' => false])

@php
    $classes = $dark
        ? 'inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 bg-transparent border-2 border-[#6B5744] rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-cream-white hover:bg-cream hover:border-cream hover:text-ink transition duration-[220ms] ease-in-out'
        : 'inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 bg-transparent border-2 border-ink rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-ink hover:bg-ink hover:text-cream-white transition duration-[220ms] ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
