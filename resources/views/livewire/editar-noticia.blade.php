<div>
    <form class="flex flex-col gap-5" wire:submit.prevent='editarNoticia' method="POST">

        <div class="flex flex-col gap-1.5">
            <x-input-label for="titulo" :value="__('Título')" />
            <x-text-input id="titulo" class="block w-full" type="text" wire:model="titulo" :value="old('titulo')"
                placeholder="Título" />
            <x-input-error :messages="$errors->get('titulo')" />
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="slug" :value="__('URL amigable')" />
            <x-text-input id="slug" class="block w-full bg-cream-hover text-ink-muted cursor-not-allowed"
                type="text" disabled wire:model="slug" />
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="intro" :value="__('Introducción')" />
            <x-text-input id="intro" class="block w-full" type="text" wire:model="intro" :value="old('intro')"
                placeholder="Resumen breve para el listado" />
            <x-input-error :messages="$errors->get('intro')" />
        </div>

        <div class="flex flex-wrap items-end gap-5">
            <div class="flex flex-col gap-1.5 max-w-[260px]">
                <x-input-label for="fecha" :value="__('Fecha')" />
                <x-text-input id="fecha" class="block w-full" type="date" wire:model="fecha" :value="old('fecha')" />
                <x-input-error :messages="$errors->get('fecha')" />
            </div>
            <label
                class="flex items-center gap-3 cursor-pointer bg-cream-white border border-rule-light rounded-sharp px-[18px] h-[50px]">
                <input type="checkbox" wire:model="portada" id="portada" {{ $portada ? 'checked' : '' }}
                    class="w-5 h-5 accent-oxide rounded-sharp cursor-pointer">
                <span class="text-sm font-semibold text-ink-body whitespace-nowrap">Mostrar en portada</span>
            </label>
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="texto" :value="__('Texto')" />
            <x-tinymce-editor field="texto" />
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 max-w-[520px]">
            <div class="flex flex-col gap-1.5">
                <x-input-label :value="__('Imagen actual')" />
                <img src="{{ asset('storage/' . $imagen) }}" alt="{{ 'Imagen ' . $id }}"
                    class="w-full h-full object-cover">
            </div>
        </div>
        <div class="flex flex-col gap-1.5">
            <x-input-label for="imagen_nueva" :value="__('Nueva imagen')" />
            <x-text-input id="imagen_nueva" class="block w-full" type="file" wire:model="imagen_nueva"
                accept="image/*" />
            @if ($imagen_nueva)
                <div class="w-full border border-rule-input rounded-sharp overflow-hidden">
                    <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Nueva imagen de la noticia"
                        class="w-full h-full object-cover">
                </div>
            @endif
            <x-input-error :messages="$errors->get('imagen_nueva')" />
        </div>
</div>

<div class="flex gap-3.5 mt-2">
    <x-primary-button>Guardar</x-primary-button>
    <x-link :href="route('admin.noticias.index')" class="flex items-center min-h-[50px]">Cancelar</x-link>
</div>

@if ($errors->any())
    <div class="border-l-4 border-oxide bg-cream-white text-oxide text-sm font-semibold p-3 rounded-sharp">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</form>
</div>
