<x-app-layout pageTitle="Discografía">
    <div class="max-w-content mx-auto px-edge py-section-lg">
        <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px]">Discografía
        </p>
        <h1
            class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.6vw,42px)] tracking-[-0.02em] mb-3">
            Discografía</h1>


        <div>
            @foreach ($discos as $disco)
                <x-disco :disco="$disco" />
            @endforeach
        </div>
    </div>

    {{-- FRANJA NEGRA DE CIERRE --}}
    {{-- <section class="bg-ink">
        <div class="max-w-home mx-auto px-edge-home py-section flex flex-wrap items-center justify-between gap-8">
            <h2
                class="font-titulo font-black uppercase text-cream-white text-[clamp(20px,2.2vw,26px)] tracking-[-0.015em]">
                Llévate el vinilo</h2>
            <div class="flex flex-wrap gap-4">
                <x-button :href="route('tienda')">Ir a la tienda</x-button>
                <x-button-ghost dark href="https://theelectricbuffalo.bandcamp.com/"
                    target="_blank">Bandcamp</x-button-ghost>
            </div>
        </div>
    </section> --}}
</x-app-layout>
