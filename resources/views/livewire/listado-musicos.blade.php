<div class="overflow-x-auto bg-cream-field border border-rule-light rounded-sharp">
    <table class="w-full min-w-[640px] border-collapse text-left">
        <thead>
            <tr class="bg-cream-hover">
                <th
                    class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Id</th>
                <th
                    class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Nombre</th>
                <th
                    class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Origen</th>
                <th
                    class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Imagen</th>
                <th
                    class="text-[11px] font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($musicos as $musico)
                <tr class="border-b border-rule-light-soft last:border-b-0">
                    <td class="px-4 py-3.5 text-[13px] font-bold text-ink-muted whitespace-nowrap">{{ $musico->id }}
                    </td>
                    <td class="px-4 py-3.5 min-w-[180px]">
                        <span class="block text-[15px] font-bold text-ink-heading text-pretty">{{ $musico->nombre }}
                            {{ $musico->apellidos }}</span>
                        @if ($musico->alias)
                            <span class="block text-xs text-ink-muted pt-[3px]">“{{ $musico->alias }}”</span>
                        @endif
                    </td>
                    <td class="px-4 py-3.5 text-sm text-ink-body whitespace-nowrap">{{ $musico->origen }}</td>
                    <td class="px-4 py-3.5">
                        <img src="{{ asset('storage/' . $musico->imagen) }}" alt="Imagen de {{ $musico->nombre }}"
                            class="w-20 h-20 object-cover border border-rule-light rounded-sharp">
                    </td>
                    <td class="px-4 py-3.5 whitespace-nowrap">
                        <div class="flex gap-3.5 items-center">
                            <x-link-edit href="{{ route('admin.musicos.edit', $musico->id) }}"
                                class="fa-regular fa-pen-to-square"></i></x-link-edit>
                            <x-button-trash type="button"
                                wire:click="$dispatch('mostrarAlerta',{{ $musico->id }})"><i
                                    class="fa-regular fa-trash-can"></i></x-button-trash>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-sm text-ink-muted text-center">No hay músicos todavía.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('mostrarAlerta', musicoId => {
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
                    Livewire.dispatch('eliminarMusico', {
                        id: musicoId
                    });
                    Swal.fire(
                        '¡Eliminado!',
                        'El músico ha sido eliminado',
                        'success'
                    )
                }
            })
        })
    </script>
@endpush
