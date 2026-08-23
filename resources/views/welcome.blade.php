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
    <section id="discografia" class="bg-ink px-edge-home pt-[clamp(56px,7vw,88px)] pb-[clamp(64px,8vw,104px)]">
        <div class="max-w-home mx-auto px-edge-home">
            <div class="flex items-baseline justify-between gap-5 mb-[clamp(30px,4vw,46px)] flex-wrap">
                <h2
                    class="font-titulo font-black uppercase text-onblack-heading text-[clamp(26px,3.4vw,36px)] tracking-[-0.015em]">
                    Discografía</h2>
                <a href="{{ route('discografia') }}"
                    class="inline-flex items-center min-h-[44px] font-cuerpo text-sm font-bold tracking-[0.5px] text-amber hover:text-amber/80 transition duration-200">Ver
                    todo</a>
            </div>
            <ul class="list-none m-0 p-0 flex flex-wrap gap-[clamp(20px,3vw,30px)] items-start">
                @foreach ($discos as $disco)
                    <li class="flex-1 basis-[220px] min-w-0">
                        <a href="{{ route('discografia.mostrar', $disco->slug) }}" class="block group">
                            {{-- <pre class="text-xs text-onblack-body whitespace-pre-wrap break-words">{{ json_encode($disco, JSON_PRETTY_PRINT) }}</pre> --}}
                            <img src="{{ asset($disco->imagen ? 'storage/' . $disco->imagen : 'img/no-imagen.jpg') }}"
                                alt="Portada de {{ $disco->nombre }}"
                                class="w-full aspect-square object-cover mb-[14px] group-hover:opacity-90 transition-opacity duration-200">
                            <span
                                class="block font-cuerpo font-bold text-base text-onblack-heading">{{ $disco->nombre }}</span>
                            <span class="block text-sm text-onblack-body/70">{{ $disco->anio_edicion }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
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
