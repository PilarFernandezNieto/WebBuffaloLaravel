@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full px-3 py-2 text-start font-cuerpo text-sm font-semibold uppercase tracking-[1px] text-amber border-l-4 border-[#C09A3E] focus:outline-none transition duration-200 ease-in-out'
            : 'block w-full px-3 py-2 text-start font-cuerpo text-sm font-semibold uppercase tracking-[1px] text-cream/90 border-l-4 border-transparent hover:text-amber focus:outline-none transition duration-200 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} @if($active ?? false) aria-current="page" @endif>
    {{ $slot }}
</a>
