<div>
    <form class="flex flex-col gap-5" wire:submit.prevent='editarMusico' method="POST">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div class="flex flex-col gap-1.5">
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block w-full" type="text" wire:model="nombre" :value="old('nombre')"
                    placeholder="Nombre" />
                <x-input-error :messages="$errors->get('nombre')" />
            </div>
            <div class="flex flex-col gap-1.5">
                <x-input-label for="apellidos" :value="__('Apellidos')" />
                <x-text-input id="apellidos" class="block w-full" type="text" wire:model="apellidos"
                    :value="old('apellidos')" placeholder="Apellidos" />
                <x-input-error :messages="$errors->get('apellidos')" />
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
            <div class="flex flex-col gap-1.5">
                <x-input-label for="alias" :value="__('Alias')" />
                <x-text-input id="alias" class="block w-full" type="text" wire:model="alias" :value="old('alias')"
                    placeholder="Apodo en el escenario" />
                <x-input-error :messages="$errors->get('alias')" />
            </div>
            <div class="flex flex-col gap-1.5">
                <x-input-label for="origen" :value="__('Origen')" />
                <x-text-input id="origen" class="block w-full" type="text" wire:model="origen" :value="old('origen')"
                    placeholder="Ciudad" />
                <x-input-error :messages="$errors->get('origen')" />
            </div>
            <div class="flex flex-col gap-1.5">
                <x-input-label for="fecha_nac" :value="__('Fecha de nacimiento')" />
                <x-text-input id="fecha_nac" class="block w-full" type="date" wire:model="fecha_nac"
                    :value="old('fecha_nac')" />
                <x-input-error :messages="$errors->get('fecha_nac')" />
            </div>
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="biografia" :value="__('Biografía')" />
            <x-tinymce-editor field="biografia" />
            <x-input-error :messages="$errors->get('biografia')" />
        </div>

        <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-1.5">
                <x-input-label :value="__('Imagen actual')" />
                <div class="w-52   border border-rule-input rounded-sharp overflow-hidden">
                    <img src="{{ asset('storage/' . $imagen) }}" alt="Imagen de {{ $nombre }}"
                        class="w-full h-full object-cover">
                </div>
            </div>
            <div class="flex flex-col gap-1.5">
                <x-input-label for="imagen_nueva" :value="__('Nueva imagen')" />
                <x-text-input id="imagen_nueva" class="block w-full" type="file" wire:model="imagen_nueva"
                    accept="image/*" />
                @if ($imagen_nueva)
                    <div class="w-full   border border-rule-input rounded-sharp overflow-hidden">
                        <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Nueva imagen del músico"
                            class="w-full h-full object-cover">
                    </div>
                @endif
                <x-input-error :messages="$errors->get('imagen_nueva')" />
            </div>
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="fotografo" :value="__('Foto de')" />
            <x-text-input id="fotografo" class="block w-full" type="text" wire:model="fotografo" :value="old('fotografo')"
                placeholder="Nombre del fotógrafo" />
            <x-input-error :messages="$errors->get('fotografo')" />
        </div>

        <div class="flex gap-3.5 mt-2">
            <x-primary-button>Guardar</x-primary-button>
            <x-link :href="route('admin.musicos.index')" class="flex items-center min-h-[50px]">Cancelar</x-link>
        </div>
    </form>
</div>
