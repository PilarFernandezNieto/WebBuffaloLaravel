@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm']) }}>
