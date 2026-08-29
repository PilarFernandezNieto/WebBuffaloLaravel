@php
    $classes =
        'inline-flex items-center justify-center px-8 py-4 bg-oxide border border-oxide rounded-sharp font-cuerpo text-sm  font-bold text-cream-white uppercase tracking-widest hover:bg-oxide-hover focus:bg-oxide-hover active:bg-oxide-hover transition ease-in-out duration-500';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
