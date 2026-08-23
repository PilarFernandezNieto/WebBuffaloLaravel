    <section class="max-w-home mx-auto px-edge-home py-section-lg">
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
                <x-disco :disco="$disco">
            @endforeach
        </div>
    </section>
