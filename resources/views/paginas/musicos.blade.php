<x-app-layout>
    <div class="max-w-6xl mx-auto my-12">
    @foreach ($musicos as $musico)
        <section class="my-4">
            <div class="grid grid-cols-2">
                <img src="{{ asset('storage/imagenes/' . $musico->imagen) }}" alt="musico_{{ $musico->nombre }}">
            </div>
        </section>
    @endforeach
</div>

</x-app-layout>
