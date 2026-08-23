@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'block w-full min-h-[50px] px-4 py-[14px] bg-cream-field border border-rule-input rounded-sharp font-cuerpo text-base text-ink-body placeholder:text-ink-muted/60 focus:border-oxide-focus focus:ring-oxide-focus']) }}>
