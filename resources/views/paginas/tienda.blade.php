<x-app-layout pageTitle="Tienda">
    <!-- LISTADO CON TODAS LAS NOTICIAS -->
    <div class=" my-10 w-[95%] md:w-[80%] mx-auto max-w-[1300px]">
        <h1 class="text-5xl mb-10">Discos</h1>
        <div class="md:grid md:grid-cols-3 gap-8">
            @foreach ($discos as $disco)
                <x-disco-tienda :disco="$disco" />
            @endforeach
        </div>
    </div>
    <section class="imagen-central-tienda flex flex-col justify-center py-12 relative">
        <div class="bg-slate-950 opacity-50 absolute top-0 left-0 h-full w-full"></div>
        <div class="py-4 text-center z-10 leading-7">
            <h3 class="text-white text-4xl mb-8">Nuestra tienda está en construcción</h3>
            <p class="text-custom-white">Si te interesa alguno de nuestros productos o quieres ponerte en contacto con
                nosotros, escríbenos</p>

            <p class="text-custom-white"> El envío de productos podría generar gastos de envío</p>
            <x-button href="mailto:info@theelectricbuffalo.com" class="mt-10">info@theelectricbuffalo.com</x-button>

        </div>
    </section>
    @if (count($camisetas) > 0)
        <div class=" my-10 w-[95%] md:w-[80%] mx-auto max-w-[1300px]">
            <h1 class="text-5xl mb-10">Camisetas</h1>
            <div class="md:grid md:grid-cols-3 gap-8">
                @foreach ($camisetas as $camiseta)
                    <x-camiseta-tienda :camiseta="$camiseta" />
                @endforeach
            </div>
        </div>
    @endif

</x-app-layout>
