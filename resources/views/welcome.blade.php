<x-app-layout pageTitle="Inicio">

    {{-- 1. HERO A SANGRE --}}
    <section
        class="relative flex items-end min-h-[clamp(520px,78vh,760px)] bg-ink-hero border-b-[3px] border-ink overflow-hidden">
        <img src="{{ asset('img/bufalos_header.jpg') }}" alt="The Electric Buffalo en directo"
            class="absolute inset-0 w-full h-full object-cover" fetchpriority="high">
        <div class="absolute inset-0 bg-gradient-to-t from-ink-hero/90 via-ink-hero/35 to-transparent"></div>

        <div class="relative z-10 w-full max-w-home mx-auto px-edge-home pb-[clamp(32px,5vw,56px)]">
            <div class="flex items-center gap-[14px] mb-4">
                <span class="inline-block h-px w-11 bg-amber"></span>
                <span class="font-titulo italic text-amber text-[13px] font-semibold uppercase tracking-[1.3px]">
                    Desde 2006</span>
            </div>
            <h1
                class="font-titulo font-black uppercase text-cream-white leading-[0.9] -tracking-tighter text-[clamp(48px,8vw,80px)] text-pretty">
                The Electric<br>Buffalo
            </h1>

        </div>

        <p class="absolute bottom-4 right-edge-home z-10 font-titulo italic text-[12px] text-onblack-body/80">
            Foto de Manfred</p>
    </section>

    {{-- 2. FRANJA ÓXIDO --}}
    <section class="bg-oxide">
        <div class="max-w-home mx-auto px-edge-home py-4 text-center">
            <p
                class="font-titulo font-black uppercase text-cream-white text-[clamp(19px,2.4vw,20px)] tracking-[-0.015em]">
                Sin prisa, sin pretensión: solo la música que nos apetece hacer.
            </p>
        </div>
    </section>

    @isset($contenido)
        <x-contenido :contenido="$contenido" />
    @endisset

    {{-- 3. DISCOGRAFÍA --}}
    <section class="max-w-home mx-auto px-edge-home py-section-lg b">
        <div class="flex items-baseline justify-between gap-6 mb-10 flex-wrap">
            <h2
                class="font-titulo font-black uppercase text-ink-heading text-[clamp(20px,2.2vw,26px)] tracking-[-0.015em]">
                Discografía</h2>
            <a href="{{ route('discografia') }}"
                class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Ver
                todos los discos</a>
        </div>
        <div class="flex flex-wrap gap-cols">
            @foreach ($discos as $disco)
                <a href="{{ route('discografia.mostrar', $disco->slug) }}" class="flex-1 min-w-[220px] group">
                    <div
                        class="aspect-square overflow-hidden shadow-[0_8px_22px_rgba(61,49,42,0.16)] group-hover:shadow-[0_16px_36px_rgba(61,49,42,0.28)] transition-shadow duration-[260ms] ease-in-out">
                        <img src="{{ asset($disco->imagen ? 'storage/' . $disco->imagen : 'img/no-imagen.jpg') }}"
                            alt="Portada de {{ $disco->nombre }}"
                            class="w-full h-full object-cover group-hover:-translate-y-1 transition-transform duration-[260ms] ease-in-out">
                    </div>
                    <p
                        class="mt-3 font-titulo font-black uppercase text-ink-heading group-hover:text-oxide transition-colors duration-200 text-lg">
                        {{ $disco->nombre }}</p>
                    <p class="text-ink-muted text-sm">{{ $disco->anio_edicion }}</p>
                </a>
            @endforeach
        </div>
    </section>

    {{-- 4. BANNER TIENDA --}}
    {{-- <section class="relative bg-ink">
        <img src="{{ asset('img/imagen_central.webp') }}" alt=""
            class="absolute inset-0 w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-oxide/90"></div>
        <div class="relative z-10 max-w-home mx-auto px-edge-home py-section-lg text-center">
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
        </div>
    </section> --}}

    {{-- 5. NOTICIAS --}}
    <livewire:noticias-portada />

</x-app-layout>
