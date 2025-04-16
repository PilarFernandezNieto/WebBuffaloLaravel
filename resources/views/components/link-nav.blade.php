@props(['active'])

{{-- ENALACES MENÚ ZONA PÚBLICA--}}

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center p-4 rounded-lg border-b border-custom-red text-base lg:text-xl font-medium leading-5 text-custom-white focus:outline-none transition duration-500 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-xl text-base lg:text-xl font-medium leading-5 text-custom-white hover:text-custom-red  focus:outline-none focus:text-custom-white transition duration-500 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
