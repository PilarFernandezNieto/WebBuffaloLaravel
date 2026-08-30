<x-app-layout pageTitle="Noticias">
    <div class="max-w-home mx-auto flex flex-wrap gap-cols items-end px-edge pt-section pb-[clamp(20px,3vw,28px)]">
        <div class="flex flex-col">
            <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-[10px]">
                Noticias</p>
            <h1
                class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.6vw,42px)] leading-[1.02] tracking-[-0.02em]">
                Qué anda haciendo la manada</h1>
        </div>

    </div>

    <div class="max-w-home mx-auto px-edge pt-[clamp(20px,3vw,32px)] pb-[clamp(48px,6vw,76px)]">
        <x-noticias-public :noticias="$noticias" />
    </div>
</x-app-layout>
