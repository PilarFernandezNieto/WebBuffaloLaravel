<section class="max-w-home mx-auto px-edge py-section">
    <div class="flex flex-col md:flex-row items-center gap-cols-lg">
        <div class="flex-none w-[clamp(300px,40vw,480px)]">
            <img src="{{ asset($contenido->imagen ? 'storage/' . $contenido->imagen : 'img/no-imagen.jpg') }}"
                alt="{{ $contenido->titulo }}" class="w-full rounded-sharp object-cover aspect-square mb-4 md:mb-0"
                fetchpriority="high" width="600" height="600" loading="eager">
        </div>
        {{-- <div class="flex-1 min-w-[280px]">
            <h2
                class="font-titulo text-ink-heading text-[clamp(20px,2.2vw,26px)] font-black uppercase tracking-[-0.015em] leading-tight mb-5">
                {{ $contenido->titulo }}</h2>
            <div class="contenido text-ink-body text-[16px] leading-[1.75] max-w-[66ch]">{!! $contenido->texto !!}</div>
        </div> --}}

        <div class="flex-1 min-w-[280px]">

            <blockquote class="m-0 pl-cols relative border-l-[3px] border-oxide">
                <span aria-hidden="true"
                    class="absolute -top-3.5 left-cols font-titulo text-[56px] leading-none text-oxide opacity-50">&ldquo;</span>
                <div
                    class="informacion-oscura font-titulo italic text-body text-[17px] leading-[1.75] max-w-[70ch] space-y-3.5">
                    {!! $contenido->texto !!}
                </div>
            </blockquote>
        </div>

    </div>
</section>
@push('styles')
    <style>
        .contenido p {
            margin-bottom: 1rem !important;
        }
    </style>
@endpush
