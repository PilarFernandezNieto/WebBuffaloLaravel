<x-app-layout pageTitle="La Banda">
    <div class="max-w-content mx-auto px-[clamp(20px,4vw,44px)] py-[clamp(56px,7vw,96px)]">

        {{-- CABECERA --}}
        <div class="flex flex-wrap items-baseline justify-between gap-8 mb-4">
            <div>
                <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-3">La Banda</p>
                <h1 class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.6vw,42px)] tracking-[-0.02em]">Cuatro currantes</h1>
            </div>
            <p class="text-ink-body text-base leading-[1.65] max-w-[56ch]">Cuatro músicos asturianos que llevan haciendo la música que les apetece desde hace casi veinte años, sin prisa ni pretensión.</p>
        </div>

        <x-banda :musicos="$musicos" />

        {{-- IN MEMORIAM --}}
        <section class="bg-ink -mx-[clamp(20px,4vw,44px)] px-[clamp(20px,4vw,44px)] py-[clamp(40px,5vw,64px)] mt-4">
            <div class="flex flex-wrap gap-8">
                <p class="font-titulo italic text-amber text-[13px] font-semibold uppercase tracking-[1.2px] flex-none basis-[180px]">In memoriam</p>
                <div class="flex-1 min-w-[260px]">
                    <p class="font-titulo font-black uppercase text-cream-white text-lg mb-2">Alejandro «Espina»</p>
                    <p class="text-onblack-body text-[15px] leading-[1.7] max-w-[66ch]">Bajista fundador de la banda, se nos fue en 2016. Su recuerdo sigue presente en cada disco y cada concierto del Búfalo Eléctrico.</p>
                    <a href="{{ route('historia') }}" class="inline-block mt-3 font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-amber hover:text-amber/80 transition duration-200">Lee la historia completa →</a>
                </div>
            </div>
        </section>

        {{-- CTA CIERRE --}}
        <div class="flex flex-wrap items-center justify-between gap-6 pt-[clamp(40px,5vw,64px)]">
            <h2 class="font-titulo font-black uppercase text-ink-heading text-[clamp(20px,2.2vw,26px)] tracking-[-0.015em]">Escúchalos juntos</h2>
            <div class="flex flex-wrap gap-4">
                <x-button :href="route('discografia')">Discografía</x-button>
                <x-button-ghost :href="route('historia')">Historia</x-button-ghost>
            </div>
        </div>
    </div>
</x-app-layout>
