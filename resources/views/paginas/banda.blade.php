<x-app-layout pageTitle="La Banda">
    <div class="max-w-content mx-auto px-edge py-section-lg">

        {{-- CABECERA --}}
        <div class="flex flex-wrap items-center justify-between gap-8 mb-4">
            <div>
                <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px]">La
                    Banda</p>
                <h1
                    class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.6vw,42px)] tracking-[-0.02em]">
                    Ahora</h1>
            </div>

        </div>

        <x-banda :musicos="$musicos" />



        {{-- IN MEMORIAM --}}
        {{-- <section class="bg-ink -mx-edge px-edge py-section mt-4">
            <div class="flex flex-wrap gap-8">
                <p class="font-titulo italic text-amber text-sm font-semibold uppercase tracking-[1.2px] flex-none basis-[180px]">In memoriam</p>
                <div class="flex-1 min-w-[260px]">
                    <p class="font-titulo font-black uppercase text-cream-white text-lg mb-2">Alejandro «Espina»</p>
                    <p class="text-onblack-body text-base leading-[1.7] max-w-[66ch]">Bajista fundador de la banda, se nos fue en 2016. Su recuerdo sigue presente en cada disco y cada concierto del Búfalo Eléctrico.</p>
                    <a href="{{ route('historia') }}" class="inline-block mt-3 font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-amber hover:text-amber/80 transition duration-200">Lee la historia completa →</a>
                </div>
            </div>
        </section> --}}

    </div>
    {{-- 4. BANNER TODOS --}}
    <section class="relative bg-ink min-h-96">
        <img src="{{ asset('img/electric_bufalo_ahora_min.webp') }}" alt=""
            class="inline md:hidden absolute inset-0 w-full h-full object-cover">
        <img src="{{ asset('img/imagen_central.webp') }}" alt=""
            class="hidden md:inline absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-oxide/20"></div>
        {{-- <div class="relative z-10 max-w-home mx-auto px-edge-home py-section-lg text-center">
            <h2
                class="font-titulo font-black uppercase text-cream-white text-[clamp(30px,3.6vw,42px)] tracking-[-0.02em] mb-4">
                Llévate el vinilo</h2>
            <p class="font-cuerpo text-onblack-body text-base max-w-[56ch] mx-auto mb-8">Discos, camisetas y más
                merchandising del Búfalo Eléctrico.</p>
            <div class="flex flex-wrap items-center justify-center gap-4">
                <x-button :href="route('tienda')" class="!bg-ink !border-ink hover:!bg-ink/80">Ir a la tienda</x-button>
                <x-button-ghost dark href="https://theelectricbuffalo.bandcamp.com/"
                    target="_blank">Bandcamp</x-button-ghost>
            </div>
        </div> --}}
    </section>
</x-app-layout>
