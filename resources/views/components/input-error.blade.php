@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'font-cuerpo text-sm font-semibold text-oxide space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
