<div>
    <form class="flex flex-col gap-6" wire:submit.prevent='crearProducto' method="POST">
        <fieldset class="border border-rule-light bg-cream-field rounded-sharp p-5 flex flex-col gap-5">
            <legend class="font-titulo text-oxide text-xs font-bold uppercase tracking-[1px] px-1">Datos comunes</legend>

            <div class="flex flex-col gap-1.5">
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block w-full" type="text" wire:model="nombre" :value="old('nombre')"
                    placeholder="Nombre" />
                <x-input-error :messages="$errors->get('nombre')" />
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 max-w-[520px]">
                <div class="flex flex-col gap-1.5">
                    <x-input-label :value="__('Imagen actual')" />
                    <div
                        class="w-full aspect-[4/3] border border-rule-input rounded-sharp bg-cream-hover flex items-center justify-center text-xs font-bold uppercase tracking-[0.6px] text-ink-muted">
                        Sin imagen todavía
                    </div>
                </div>
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="imagen" :value="__('Imagen')" />
                    <x-text-input id="imagen" class="block w-full" type="file" wire:model="imagen"
                        accept="image/*" />
                    @if ($imagen)
                        <div class="w-full aspect-[4/3] border border-rule-input rounded-sharp overflow-hidden">
                            <img src="{{ $imagen->temporaryUrl() }}" alt="Imagen del producto"
                                class="w-full h-full object-cover">
                        </div>
                    @endif
                    <x-input-error :messages="$errors->get('imagen')" />
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="precio" :value="__('Precio')" />
                    <x-text-input id="precio" class="block w-full" type="text" wire:model="precio"
                        :value="old('precio')" placeholder="Precio" />
                    <x-input-error :messages="$errors->get('precio')" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="categoria" :value="__('Categoría')" />
                    <select wire:model="categoria" id="categoria"
                        class="block w-full min-h-[50px] px-4 bg-cream-field border border-rule-input rounded-sharp focus:border-oxide-focus focus:ring-oxide-focus">
                        <option value="">-- Seleccione --</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="stock" :value="__('Stock')" />
                    <x-text-input id="stock" class="block w-full" type="text" wire:model="stock"
                        :value="old('stock')" placeholder="Stock" />
                    <x-input-error :messages="$errors->get('stock')" />
                </div>
            </div>
        </fieldset>

        <fieldset class="border border-rule-light bg-cream-field rounded-sharp p-5 flex flex-col gap-5">
            <legend class="font-titulo text-oxide text-xs font-bold uppercase tracking-[1px] px-1">Discos</legend>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="anio_edicion" :value="__('Año de edición')" />
                    <x-text-input id="anio_edicion" class="block w-full" type="text" wire:model="anio_edicion"
                        :value="old('anio_edicion')" placeholder="Año de edición" />
                    <x-input-error :messages="$errors->get('anio_edicion')" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="sello" :value="__('Sello')" />
                    <x-text-input id="sello" class="block w-full" type="text" wire:model="sello"
                        :value="old('sello')" placeholder="Sello" />
                    <x-input-error :messages="$errors->get('sello')" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="formato" :value="__('Formato')" />
                    <select wire:model="formato" id="formato"
                        class="block w-full min-h-[50px] px-4 bg-cream-field border border-rule-input rounded-sharp focus:border-oxide-focus focus:ring-oxide-focus">
                        <option value="">-- Seleccione --</option>
                        @foreach ($formatos as $formato)
                            <option value="{{ $formato->id }}">{{ $formato->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset class="border border-rule-light bg-cream-field rounded-sharp p-5 flex flex-col gap-5">
            <legend class="font-titulo text-oxide text-xs font-bold uppercase tracking-[1px] px-1">Camisetas</legend>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="color" :value="__('Color')" />
                    <x-text-input id="color" class="block w-full" type="text" wire:model="color"
                        :value="old('color')" placeholder="Color" />
                    <x-input-error :messages="$errors->get('color')" />
                </div>
                <div class="flex flex-col gap-1.5">
                    <x-input-label for="talla" :value="__('Talla')" />
                    <select wire:model="talla" id="talla"
                        class="block w-full min-h-[50px] px-4 bg-cream-field border border-rule-input rounded-sharp focus:border-oxide-focus focus:ring-oxide-focus">
                        <option value="">-- Seleccione --</option>
                        @foreach ($tallas as $talla)
                            <option value="{{ $talla->id }}">{{ $talla->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="informacion" :value="__('Información')" />
            <x-tinymce-editor field="informacion" />
        </div>
        <div class="flex flex-col gap-1.5">
            <x-input-label for="textos" :value="__('Textos')" />
            <x-tinymce-editor field="textos" />
        </div>

        <div class="flex gap-3.5 mt-2">
            <x-primary-button>Guardar</x-primary-button>
            <x-link :href="route('admin.productos.index')" class="flex items-center min-h-[50px]">Cancelar</x-link>
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
