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
                    Fecha</th>
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Imagen</th>
                <th
                    class="text-xs font-bold tracking-[1.3px] uppercase text-ink-muted px-4 py-3.5 border-b border-rule-light whitespace-nowrap">
                    Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($noticias as $noticia)
                <tr class="border-b border-rule-light-soft last:border-b-0">
                    <td class="px-4 py-3.5 text-sm font-bold text-ink-muted whitespace-nowrap">{{ $noticia->id }}
                    </td>
                    <td class="px-4 py-3.5">
                        <i class="{{ $noticia->portada == 1 ? 'fa-regular fa-square-check text-oxide text-lg' : 'fa-regular fa-square text-ink-muted/50 text-lg' }}"
                            title="{{ $noticia->portada == 1 ? 'Portada' : 'No portada' }}"></i>
                    </td>
                    <td class="px-4 py-3.5 min-w-44">
                        <span
                            class="block text-base font-bold text-ink-heading text-pretty">{{ $noticia->titulo }}</span>
                    </td>
                    <td class="px-4 py-3.5 text-sm font-semibold text-ink-muted whitespace-nowrap">
                        {{ $noticia->fecha_formateada }}</td>
                    <td class="px-4 py-3.5">
                        <img src="{{ asset('storage/' . $noticia->imagen) }}" alt="Imagen de {{ $noticia->titulo }}"
                            class="w-12 h-12 object-cover border border-rule-light rounded-sharp">
                    </td>
                    <td class="px-4 py-3.5 whitespace-nowrap">
                        <div class="flex gap-3.5 items-center">
                            <a href="{{ route('admin.noticias.edit', $noticia->id) }}"
                                class="text-xs font-bold uppercase tracking-[1px] min-h-11 flex items-center hover:text-oxide-hover">Editar</a>
                            <button type="button" wire:click="$dispatch('mostrarAlerta',{{ $noticia->id }})"
                                class="text-xs font-bold uppercase tracking-[1px] text-ink-muted min-h-11 flex items-center hover:text-oxide transition duration-200 bg-transparent border-0 p-0 font-cuerpo cursor-pointer">Borrar</button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-4 py-6 text-sm text-ink-muted text-center">No hay noticias todavía.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<x-confirm-delete-alert event="eliminarNoticia" />
