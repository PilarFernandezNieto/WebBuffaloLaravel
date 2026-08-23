@php
    $isDisabled = $attributes->get('disabled');
    $classes =
        'inline-flex items-center justify-center min-h-[46px] px-[26px] py-3 bg-oxide border border-oxide rounded-sharp font-cuerpo text-sm font-bold uppercase tracking-[0.5px] text-cream-white hover:bg-oxide-hover hover:border-oxide-hover transition duration-[220ms] ease-in-out';
@endphp
@if ($isDisabled)
    <button {{ $attributes->merge(['class' => $classes, 'disabled' => 'disabled']) }}>
        {{ $slot }}
    </button>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@endif
