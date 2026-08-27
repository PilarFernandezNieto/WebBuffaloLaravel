<div class="overflow-x-auto bg-cream-field border border-rule-light rounded-sharp">
    <table class="w-full min-w-[640px] border-collapse text-left">
        <thead>
            <tr class="bg-cream-hover">
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Id</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Nombre</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Email</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Rol</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Fecha alta</th>
                <th class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($usuarios as $usuario)
                <tr class="border-b border-rule-light-soft last:border-b-0">
                    <td class="px-4 py-3.5 text-[13px] font-bold text-ink-muted whitespace-nowrap">{{ $usuario->id }}</td>
                    <td class="px-4 py-3.5 min-w-[180px]">
                        <span class="block text-[15px] font-bold text-ink-heading text-pretty">{{ $usuario->name }}</span>
                    </td>
                    <td class="px-4 py-3.5 text-sm text-ink-body break-words">{{ $usuario->email }}</td>
                    <td class="px-4 py-3.5">
                        <span class="text-[11px] font-bold tracking-[1.2px] uppercase text-ink-muted border border-rule-input px-[10px] py-[5px] rounded-sharp whitespace-nowrap">
                            {{ $usuario->admin ? 'Administrador' : 'Usuario' }}
                        </span>
                    </td>
                    <td class="px-4 py-3.5 text-[13px] font-semibold text-ink-muted whitespace-nowrap">{{ $usuario->created_at->format('d·m·Y') }}</td>
                    <td class="px-4 py-3.5 whitespace-nowrap">
                        <div class="flex gap-3.5 items-center">
                            <a href="{{ route('admin.usuarios.edit', $usuario->id) }}"
                                class="text-xs font-bold uppercase tracking-[1px] min-h-11 flex items-center hover:text-oxide-hover">Editar</a>
                            <button type="button" wire:click="$dispatch('mostrarAlerta',{{ $usuario->id }})"
                                class="text-xs font-bold uppercase tracking-[1px] text-ink-muted min-h-11 flex items-center hover:text-oxide transition duration-200 bg-transparent border-0 p-0 font-cuerpo cursor-pointer">Borrar</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-6 text-sm text-ink-muted text-center">No hay usuarios todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', usuarioId => {
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
                    Livewire.dispatch('eliminarUsuario', {
                        id: usuarioId
                    });
                }
            })
        })

        Livewire.on('resultadoEliminacion', resultado => {
            if (resultado[0].success) {
                Swal.fire({
                    title: '¡Eliminado!',
                    text: resultado[0].message,
                    icon: 'success'
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: resultado[0].message,
                    icon: 'error'
                });
            }
        });
    </script>
@endpush
