@php
    $classes = 'text-3xl text-actions-edit hover:scale-125 transition duration-300 ease-in-out inline-block';
@endphp
<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
