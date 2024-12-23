@php
    $classes = "inline-flex items-center px-4 py-2 bg-custom-red border border-transparent rounded-md text-white hover:bg-custom-red-darker focus:bg-custom-red active:bg-custom-red transition ease-in-out duration-150"
@endphp
<a {{$attributes->merge(['class' => $classes])}}>
    {{ $slot }}
</a>
