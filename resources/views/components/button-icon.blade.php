@php
    $classes =
        'flex h-11 w-11 items-center justify-center rounded-full text-cream/90 text-2xl  hover:text-amber transition duration-200 ease-in-out';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
