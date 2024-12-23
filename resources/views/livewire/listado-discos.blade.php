<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
    <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
        <div>
            <h2 class="text-2xl text-gray900"> {{ __('Discos') }}</h2>
        </div>
    </div>

    @foreach ($discos as $disco)
        <div
            class="grid grid-cols-[50px_1fr_0.5fr_1fr_1fr_auto] p-4 border border-slate-300 rounded-sm shadow-sm mb-4 justify-between items-center">

            <p>{{ $disco->id }}</p>
            <p>{{ $disco->nombre }}</p>
            <p>{{ $disco->anio_edicion }}</p>
            <img src="{{ asset('storage/imagenes/' . $disco->imagen) }}" alt="Disco_ {{ $disco->id }}" class="w-28">
            <p>{{ $disco->precio_formateado }}</p>
            <div class="flex justify-between items-center">
                <a href="{{ route('admin.productos.edit', $disco->id) }}"
                    class="text-indigo-600 hover:text-indigo-700 p-2 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                    </svg>
                </a>
                <button wire:click="$dispatch('mostrarAlerta',{{ $disco->id }})"
                    class="text-red-600 hover:text-red-800 p-2 font-bold ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>

            </div>

        </div>
    @endforeach
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', discoId => {
            Swal.fire({
                title: '¿Quieres eliminar este elemento?',
                text: "Esta acción no se puede deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, elimínalo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {

                    Livewire.dispatch('eliminarDisco', {
                        id: discoId
                    });
                    Swal.fire(
                        '¡Eliminado!',
                        'El producto se ha eliminado',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
