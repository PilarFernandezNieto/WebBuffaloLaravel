<x-app-layout pageTitle="{!! $disco->nombre !!}">

    <div class="max-w-content mx-auto px-edge pt-section">

        {{-- MIGAS DE PAN --}}
        <p class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-ink-muted mb-8">
            <a href="{{ route('discografia') }}" class="hover:text-oxide transition-colors duration-200">Discografía</a> /
            {{ $disco->nombre }}
        </p>

        {{-- CABECERA --}}
        <div class="flex flex-wrap gap-cols-lg items-start pb-section">
            <div class="flex-none w-[clamp(160px,22vw,260px)]">
                <img src="{{ asset($disco->imagen ? 'storage/' . $disco->imagen : 'img/no-imagen.jpg') }}"
                    alt="Portada de {{ $disco->nombre }}"
                    class="w-full aspect-square object-cover shadow-[0_14px_34px_rgba(61,49,42,0.24)]">
            </div>
            <div class="flex-1 min-w-[300px]">
                <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px]">
                    {{ $disco->anio_edicion }}@if ($disco->sello)
                        &middot; {{ $disco->sello }}
                    @endif
                </p>
                <h1
                    class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.8vw,46px)] leading-[1] tracking-[-0.025em] mt-2 mb-4">
                    {{ $disco->nombre }}
                </h1>
                @php
                    $resumen = \Illuminate\Support\Str::limit(trim(strip_tags($disco->textos)), 200);
                @endphp
                @if ($resumen)
                    <p class="text-ink-body text-base leading-[1.7] max-w-[60ch]">{{ $resumen }}</p>
                @endif
            </div>
        </div>
    </div>

    {{-- PERSONAL Y CRÉDITOS --}}
    @php
        $personal = [];
        $creditos = [];

        if ($disco->informacion) {
            $dom = new \DOMDocument();
            libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="utf-8" @endphp' . $disco->informacion);
    libxml_clear_errors();

    foreach ($dom->getElementsByTagName('li') as $li) {
        $strong = $li->getElementsByTagName('strong')->item(0);
        $nombre = $strong ? trim($strong->textContent) : '';
        if ($nombre === '') {
            continue;
        }
        $rol = trim(\Illuminate\Support\Str::after(trim($li->textContent), ':'));
        $personal[] = ['nombre' => $nombre, 'rol' => $rol];
    }

    foreach ($dom->getElementsByTagName('p') as $p) {
        $texto = trim(preg_replace('/\s+/u', ' ', $p->textContent));
        if ($texto === '' || rtrim(mb_strtolower($texto), ':') === 'personal') {
            continue;
        }
        if (preg_match('/^([^:]{1,30}):\s*(.+)$/u', $texto, $m)) {
            $creditos[] = ['etiqueta' => trim($m[1]), 'valor' => trim($m[2])];
        } else {
            $creditos[] = ['etiqueta' => null, 'valor' => $texto];
        }
    }
}
?>
    @if ($personal || $creditos)
        <div
            class="max-w-content mx-auto px-edge pb-section flex flex-wrap gap-cols-lg items-start border-t border-rule-light pt-cols">

            @if ($personal)
                <div class="flex-1 min-w-[300px] basis-[380px]">
                    <h2
                        class="font-titulo font-black uppercase text-ink-heading text-[clamp(18px,2vw,22px)] tracking-[-0.01em] mb-5">
                        Personal</h2>
                    <ul class="list-none m-0 p-0 flex flex-col gap-3.5">
                        @foreach ($personal as $p)
                            <li
                                class="flex flex-wrap gap-x-4 gap-y-1 items-baseline pb-3.5 border-b border-rule-light-soft">
                                <span
                                    class="flex-1 min-w-[190px] text-base font-bold text-ink-heading">{{ $p['nombre'] }}</span>
                                <span
                                    class="flex-1 min-w-[200px] text-sm leading-[1.55] text-ink-muted">{{ $p['rol'] }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($creditos)
                <div class="flex-1 min-w-[280px] basis-[300px]">
                    <h2
                        class="font-titulo font-black uppercase text-ink-heading text-[clamp(18px,2vw,22px)] tracking-[-0.01em] mb-5">
                        Créditos</h2>
                    <dl class="m-0 flex flex-col gap-4">
                        @foreach ($creditos as $c)
                            <div>
                                @if ($c['etiqueta'])
                                    <dt class="text-xs font-bold uppercase tracking-[1.3px] text-ink-muted mb-1">
                                        {{ $c['etiqueta'] }}</dt>
                                @endif
                                <dd class="m-0 text-base leading-[1.65] text-ink-body">{{ $c['valor'] }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </div>
            @endif

        </div>
    @endif

    {{-- SOBRE EL DISCO --}}
    <section class="bg-ink">
        <div class="max-w-content mx-auto px-edge py-section flex flex-wrap gap-cols-lg items-start">
            <p
                class="font-titulo italic text-amber text-sm font-semibold uppercase tracking-[1.2px] flex-none basis-[180px]">
                Sobre el disco</p>
            <blockquote class="flex-1 min-w-[300px] m-0 pl-cols relative border-l-[3px] border-oxide">
                <span aria-hidden="true"
                    class="absolute -top-3.5 left-cols font-titulo text-[56px] leading-none text-oxide opacity-50">&ldquo;</span>
                <div
                    class="informacion-oscura font-titulo italic text-onblack-body text-[17px] leading-[1.75] max-w-[70ch] space-y-3.5">
                    {!! $disco->textos !!}
                </div>
            </blockquote>
        </div>
    </section>

    <div class="max-w-content mx-auto px-edge py-section">

        {{-- OTROS DISCOS --}}
        @php
            $otros = \App\Models\Producto::where('categoria_id', 1)
                ->where('id', '!=', $disco->id)
                ->orderBy('anio_edicion', 'desc')
                ->get();
        @endphp
        @if ($otros->count())
            <p class="font-titulo italic text-oxide text-sm font-semibold uppercase tracking-[1.2px] mb-5">Otros
                discos</p>
            <div class="flex flex-wrap gap-cols mb-10">
                @foreach ($otros as $otro)
                    <a href="{{ route('discografia.mostrar', $otro->slug) }}"
                        class="flex-1 min-w-[220px] flex items-center gap-4 border border-rule-light rounded-sharp p-3.5 hover:bg-cream-hover hover:border-rule-input transition duration-[220ms] ease-in-out">
                        <img src="{{ asset($otro->imagen ? 'storage/' . $otro->imagen : 'img/no-imagen.jpg') }}"
                            alt="" class="w-16 h-16 object-cover flex-none">
                        <div class="min-w-0">
                            <p class="font-titulo font-black uppercase text-ink-heading text-base tracking-[-0.01em]">
                                {{ $otro->nombre }}</p>
                            <p class="text-ink-muted text-xs font-semibold uppercase tracking-[1px] mt-1">
                                {{ $otro->anio_edicion }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

        <a href="{{ route('discografia') }}"
            class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Volver
            a la discografía</a>
    </div>

    @push('styles')
        <style>
            .informacion-oscura li {
                position: relative;
                padding-left: 25px;
            }

            .informacion-oscura li::before {
                content: "\f005";
                font-family: "Font Awesome 6 Free";
                font-weight: 900;
                position: absolute;
                left: 0;
                color: #E9A845;
            }
        </style>
    @endpush
</x-app-layout>
