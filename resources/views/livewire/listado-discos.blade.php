<div class="overflow-x-auto bg-cream-field border border-rule-light rounded-sharp">
    <table class="w-full min-w-[640px] border-collapse text-left">
        <thead>
            <tr class="bg-cream-hover">
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Id</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Nombre</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Año edición</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Imagen</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Precio</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($discos as $disco)
                <tr class="border-b border-rule-light-soft last:border-b-0">
                    <td class="px-4 py-3.5 text-[13px] font-bold text-ink-muted whitespace-nowrap">{{ $disco->id }}</td>
                    <td class="px-4 py-3.5 min-w-[180px]">
                        <span class="block text-[15px] font-bold text-ink-heading text-pretty">{{ $disco->nombre }}</span>
                    </td>
                    <td class="px-4 py-3.5 text-sm text-ink-body whitespace-nowrap">{{ $disco->anio_edicion }}</td>
                    <td class="px-4 py-3.5">
                        <img src="{{ asset('storage/' . $disco->imagen) }}" alt="Imagen de {{ $disco->nombre }}"
                            class="w-12 h-12 object-cover border border-rule-light rounded-sharp">
                    </td>
                    <td class="px-4 py-3.5 text-sm font-semibold text-ink-body whitespace-nowrap">{{ $disco->precio_formateado }}</td>
                    <td class="px-4 py-3.5 whitespace-nowrap">
                        <div class="flex gap-3.5 items-center">
                            <a href="{{ route('admin.productos.edit', $disco->id) }}"
                                class="text-xs font-bold uppercase tracking-[1px] min-h-11 flex items-center hover:text-oxide-hover">Editar</a>
                            <button type="button" wire:click="$dispatch('mostrarAlerta',{{ $disco->id }})"
                                class="text-xs font-bold uppercase tracking-[1px] text-ink-muted min-h-11 flex items-center hover:text-oxide transition duration-200 bg-transparent border-0 p-0 font-cuerpo cursor-pointer">Borrar</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-6 text-sm text-ink-muted text-center">No hay discos todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
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
                confirmButtonColor: '#AC2C28',
                cancelButtonColor: '#5A4938',
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
