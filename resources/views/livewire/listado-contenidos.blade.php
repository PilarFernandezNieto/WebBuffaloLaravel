<div class="overflow-x-auto bg-cream-field border border-rule-light rounded-sharp">
    <table class="w-full min-w-[640px] border-collapse text-left">
        <thead>
            <tr class="bg-cream-hover">
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Id</th>
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Portada</th>
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Título</th>
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Imagen</th>
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contenidos as $contenido)
                <tr class="border-b border-rule-light-soft last:border-b-0">
                    <td class="px-4 py-3.5 text-sm font-bold text-ink-muted whitespace-nowrap">{{ $contenido->id }}
                    </td>
                    <td class="px-4 py-3.5">
                        <i class="{{ $contenido->portada == 1 ? 'fa-regular fa-square-check text-oxide text-lg' : 'fa-regular fa-square text-ink-muted/50 text-lg' }}"
                            title="{{ $contenido->portada == 1 ? 'Portada' : 'No portada' }}"></i>
                    </td>
                    <td class="px-4 py-3.5 min-w-44">
                        <span
                            class="block text-base font-bold text-ink-heading text-pretty">{{ $contenido->titulo }}</span>
                    </td>
                    <td class="px-4 py-3.5">
                        <img src="{{ asset('storage/' . $contenido->imagen) }}" alt="Imagen de {{ $contenido->titulo }}"
                            class="w-12 h-12 object-cover border border-rule-light rounded-sharp">
                    </td>
                    <td class="px-4 py-3.5 whitespace-nowrap">


                        <div class="flex gap-3.5 items-center">
                            <x-link-edit href="{{ route('admin.contenidos.edit', $contenido->id) }}">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </x-link-edit>
                            <x-button-trash type="button"
                                wire:click="$dispatch('mostrarAlerta',{{ $contenido->id }})"><i
                                    class="fa-regular fa-trash-can"></i></x-button-trash>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-sm text-ink-muted text-center">No hay contenidos todavía.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<x-confirm-delete-alert event="eliminarContenido" />
