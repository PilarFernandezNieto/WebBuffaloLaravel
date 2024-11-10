@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-custom-red uppercase']) }}>
    {{ $value ?? $slot }}
</label>
