@php
    $classes = 'text-gray-500 font-bold hover:text-oxide rounded-md';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
