<section class="max-w-6xl w-11/12 mx-auto py-20 ">
    <div class="md:grid md:grid-cols-2 md:gap-20 bg-white rounded-lg p-2 shadow">
        <div>
            <img src="{{ asset('storage/imagenes/' . $contenido->imagen) }}" alt="contenido_{{ $contenido->id }}">
        </div>
        <div class="p-4">
            <h2 class="text-custom-red uppercase tracking-[0.5rem] md:tracking-[1rem] font-bold text-3xl md:text-4xl mb-8">{{ $contenido->titulo }}</h2>
            <div class="text-slate-800 text-base contenido">{!! $contenido->texto !!}</div>
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
