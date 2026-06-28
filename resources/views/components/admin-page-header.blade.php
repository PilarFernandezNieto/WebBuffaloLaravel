@props(['title'])

<h2 {{ $attributes->merge(['class' => 'font-semibold text-xl text-center text-gray-800 leading-tight']) }}>
    {{ __($title) }}
</h2>
