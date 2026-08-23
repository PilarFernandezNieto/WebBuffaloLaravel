<button {{ $attributes->merge(['type' => 'submit',
'class' => 'inline-flex items-center justify-center min-h-[50px] px-[34px] py-4 bg-oxide border border-oxide rounded-sharp font-cuerpo text-[15px] font-bold text-cream-white hover:bg-oxide-hover hover:border-oxide-hover focus:bg-oxide-hover active:bg-oxide-hover transition duration-[220ms] ease-in-out']) }}>
    {{ $slot }}
</button>
