@props(['noticia'])

<article
    class="group flex flex-col bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-md hover:shadow-custom-red transition-shadow duration-500">

    {{-- 1. IMAGEN CON ROL ACTIVO --}}
    <div class="overflow-hidden">
        <img src="{{ asset($noticia->imagen ? 'storage/imagenes/' . $noticia->imagen : 'img/no-imagen.jpg') }}"
            alt="{{ $noticia->titulo }}"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
    </div>

    {{-- CONTENIDO --}}
    <div class="flex flex-col flex-1 p-5 gap-3">

        {{-- 2. JERARQUÍA CORRECTA --}}
        <h3 class="text-xl font-medium text-custom-red leading-snug">
            {{ $noticia->titulo }}
        </h3>
        <p class="text-base text-gray-600 line-clamp-2">
            {{ $noticia->intro }}
        </p>

        <div class="flex-1"></div>

        {{-- FOOTER DE LA CARD --}}
        <div class="flex items-center justify-between pt-3 border-t border-gray-100">

            {{-- 3. FECHA EN SU SITIO --}}
            <time class="text-xs text-gray-400 italic">
                {{ $noticia->fecha_formateada }}
            </time>

            {{-- 4. CTA CON DIRECCIÓN --}}
            <a href="{{ route('noticia.mostrar', $noticia) }}"
                class="text-sm font-medium text-custom-red hover:text-custom-amber flex items-center gap-1 transition-colors">
                Leer noticia
                <span aria-hidden="true">→</span>
            </a>

        </div>
    </div>

</article>
