<x-app-layout pageTitle="{!! $noticia->titulo !!}">
    <div class="max-w-content mx-auto px-edge py-section-lg">

        {{-- MIGAS DE PAN --}}
        <p class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-ink-muted mb-8">
            <a href="{{ route('noticias') }}" class="hover:text-oxide transition-colors duration-200">Noticias</a> / {{ $noticia->titulo }}
        </p>

        {{-- CABECERA --}}
        <div class="max-w-[64ch] mb-8">
            <p class="font-cuerpo text-oxide text-xs font-bold tracking-[1.5px] mb-3">{{ str_replace('-', '·', $noticia->fecha_formateada) }}</p>
            <h1 class="font-titulo font-black uppercase text-ink-heading text-[clamp(28px,3.6vw,44px)] leading-[1.02] tracking-[-0.025em] mb-4">
                {{ $noticia->titulo }}
            </h1>
            <p class="text-ink-body text-[clamp(17px,1.8vw,19px)] leading-[1.65]">{{ $noticia->intro }}</p>
        </div>

        {{-- FOTO 16:9 --}}
        <div class="aspect-video overflow-hidden mb-10">
            <img src="{{ asset($noticia->imagen ? 'storage/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
                alt="{{ $noticia->titulo }}" class="w-full h-full object-cover">
        </div>

        {{-- CUERPO --}}
        <div class="contenido text-ink-body text-base leading-[1.8] max-w-[66ch] space-y-5 mb-16">
            {!! $noticia->texto !!}
        </div>

        {{-- OTRAS NOTICIAS --}}
        @php
            $otras = \App\Models\Noticia::where('id', '!=', $noticia->id)->orderBy('fecha', 'desc')->limit(2)->get();
        @endphp
        @if ($otras->count())
            <h2 class="font-titulo font-black uppercase text-ink-heading text-lg mb-4">Otras noticias</h2>
            <div class="flex flex-col gap-2 mb-10">
                @foreach ($otras as $otra)
                    <a href="{{ route('noticia.mostrar', $otra->slug) }}"
                        class="flex items-center gap-4 border border-rule-light px-4 py-3 hover:bg-cream-hover hover:border-rule-input transition duration-[220ms] ease-in-out">
                        <p class="font-cuerpo text-oxide text-xs font-bold tracking-[1.5px] flex-none">{{ str_replace('-', '·', $otra->fecha_formateada) }}</p>
                        <p class="font-titulo font-black uppercase text-ink-heading">{{ $otra->titulo }}</p>
                    </a>
                @endforeach
            </div>
        @endif

        <a href="{{ route('noticias') }}" class="font-cuerpo text-xs font-semibold uppercase tracking-[1px] text-oxide hover:text-oxide-hover transition duration-200">Ver todas las noticias</a>
    </div>
</x-app-layout>
