@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'font-cuerpo text-[13px] font-semibold text-oxide space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
