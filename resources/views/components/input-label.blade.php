@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-oxide uppercase']) }}>
    {{ $value ?? $slot }}
</label>
