<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' =>
            'inline-flex items-center justify-center min-h- px-12 py-4 bg-oxide border border-oxide rounded-sharp font-cuerpo text-base font-bold uppercase text-cream-white hover:bg-oxide-hover hover:border-oxide-hover focus:bg-oxide-hover active:bg-oxide-hover transition duration-[220ms] ease-in-out',
    ]) }}>
    {{ $slot }}
</button>
