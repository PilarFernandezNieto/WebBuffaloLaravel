<section class="w-[95%] md:w-[80%] mx-auto py-20 ">
    <div class="md:grid md:grid-cols-2 md:gap-20 bg-white rounded-lg p-8 shadow">
        <div class="mb-4 md:mb-0">
            <img src="{{ asset('storage/imagenes/' . $contenido->imagen) }}" alt="contenido_{{ $contenido->id }}">
        </div>
        <div class="p-0 md:p-4">
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
