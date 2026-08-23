<x-app-layout pageTitle="Noticias">
    <div class="max-w-content mx-auto px-[clamp(20px,4vw,44px)] py-[clamp(56px,7vw,96px)]">
        <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-3">Noticias</p>
        <h1 class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.6vw,42px)] tracking-[-0.02em] mb-3">Qué anda haciendo la manada</h1>
        <p class="text-ink-body text-base leading-[1.65] max-w-[56ch] mb-10">Conciertos, discos y todo lo que se cuece en el campamento base del Búfalo Eléctrico.</p>

        <x-noticias-public :noticias="$noticias" />
    </div>
</x-app-layout>
