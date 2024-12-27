<section class="w-[95%] md:w-[80%] mx-auto py-20 bg-white rounded-lg px-4 md:px-8 shadow my-10">
    <div class="md:grid md:grid-cols-2 md:gap-10  md:w-[80%] mx-auto">
        <div class="mb-4 md:mb-0">
            <img src="{{ asset('storage/imagenes/' . $contenido->imagen) }}" alt="contenido_{{ $contenido->id }}" class="w-full">
        </div>
        <div class="p-0 md:px-4">
            <h2 class="text-custom-red uppercase tracking-[1rem]  font-bold text-3xl md:text-4xl mb-8">{{ $contenido->titulo }}</h2>
            <div class="text-slate-800 text-base contenido leading-7">{!! $contenido->texto !!}</div>
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
