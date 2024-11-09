@php
    $classes = "text-xs text-gray-500 font-bold hover:text-custom-red rounded-md"
@endphp
<a {{$attributes->merge(['class' => $classes])}}>
    {{ $slot }}
</a>
