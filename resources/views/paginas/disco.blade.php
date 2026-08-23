<x-app-layout pageTitle="{!! $disco->nombre !!}">

    <div class="max-w-content mx-auto px-edge pt-section">

        {{-- MIGAS DE PAN --}}
        <p class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-ink-muted mb-8">
            <a href="{{ route('discografia') }}" class="hover:text-oxide transition-colors duration-200">Discografía</a> / {{ $disco->nombre }}
        </p>

        {{-- CABECERA --}}
        <div class="flex flex-wrap gap-cols-lg items-start pb-section">
            <div class="flex-none w-[clamp(160px,22vw,260px)]">
                <img src="{{ asset($disco->imagen ? 'storage/' . $disco->imagen : 'img/no-imagen.jpg') }}"
                    alt="Portada de {{ $disco->nombre }}"
                    class="w-full aspect-square object-cover shadow-[0_14px_34px_rgba(61,49,42,0.24)]">
            </div>
            <div class="flex-1 min-w-[300px]">
                <p class="font-titulo italic text-oxide text-[13px] font-semibold">
                    {{ $disco->anio_edicion }}@if ($disco->sello) &middot; {{ $disco->sello }} @endif
                </p>
                <h1 class="font-titulo font-black uppercase text-ink-heading text-[clamp(30px,3.8vw,46px)] leading-[1] tracking-[-0.025em] mt-2">
                    {{ $disco->nombre }}
                </h1>
            </div>
        </div>
    </div>

    {{-- SOBRE EL DISCO --}}
    <section class="bg-ink">
        <div class="max-w-content mx-auto px-edge py-section flex flex-wrap gap-cols-lg">
            <p class="font-titulo italic text-amber text-[13px] font-semibold uppercase tracking-[1.2px] flex-none basis-[180px]">Sobre el disco</p>
            <div class="flex-1 min-w-[300px] informacion text-onblack-body text-[15px] leading-[1.75] max-w-[70ch] space-y-4">
                {!! $disco->informacion !!}
            </div>
        </div>
    </section>

    <div class="max-w-content mx-auto px-edge py-section">

        {{-- OTROS DISCOS --}}
        @php
            $otros = \App\Models\Producto::where('categoria_id', 1)->where('id', '!=', $disco->id)->orderBy('anio_edicion', 'desc')->get();
        @endphp
        @if ($otros->count())
            <h2 class="font-titulo font-black uppercase text-ink-heading text-lg mb-4">Otros discos</h2>
            <div class="flex flex-col gap-2 mb-10">
                @foreach ($otros as $otro)
                    <a href="{{ route('discografia.mostrar', $otro->slug) }}"
                        class="flex items-center gap-4 border border-rule-light px-4 py-3 hover:bg-cream-hover hover:border-rule-input transition duration-[220ms] ease-in-out">
                        <img src="{{ asset($otro->imagen ? 'storage/' . $otro->imagen : 'img/no-imagen.jpg') }}"
                            alt="" class="w-16 h-16 object-cover flex-none">
                        <div>
                            <p class="font-titulo font-black uppercase text-ink-heading">{{ $otro->nombre }}</p>
                            <p class="text-ink-muted text-sm">{{ $otro->anio_edicion }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

        <a href="{{ route('discografia') }}" class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Volver a la discografía</a>
    </div>

    @push('styles')
        <style>
            .informacion li {
                position: relative;
                padding-left: 25px;
            }
            .informacion li::before {
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
