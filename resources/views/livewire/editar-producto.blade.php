<div class="flex flex-col items-center justify-center gap-4">
    <form class="w-[95%] md:w-[80%] mx-auto" wire:submit.prevent='editarProducto' method="POST">
        <fieldset class="border border-custom-red p-4 rounded-md mb-4">
            <legend class="text-custom-red text-lg uppercase px-1">Datos comunes</legend>
            <div>
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre" :value="old('nombre')"
                    placeholder="Nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="imagen" :value="__('Imagen')" />
                <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva"
                    accept="image/*" />
                <div class="md:grid md:grid-cols-2 gap-4">
                    <div class="my-5 w-[50%]">
                        <x-input-label :value="__('Imagen Actual')" />
                        <img src="{{ asset('/storage/imagenes/' . $imagen) }}" alt="{{ 'Imagen ' . $nombre }}">
                    </div>
                    <div class="my-5 w-[50%]">
                        @if ($imagen_nueva)
                            Imagen nueva:
                            <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Imagen Músico">
                        @endif
                    </div>
                </div>

                <x-input-error :messages="$errors->get('imagen_nueva')" class="mt-2" />
            </div>
            <div class="md:grid md:grid-cols-3 gap-4">
                <div>
                    <x-input-label for="precio" :value="__('Precio')" />
                    <x-text-input id="precio" class="block mt-1 w-full" type="text" wire:model="precio"
                        :value="old('precio')" placeholder="Precio" />
                    <x-input-error :messages="$errors->get('precio')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="categoria" :value="__('Categoría')" />
                    <select wire:model="categoria" id="categoria"
                        class="w-full border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm mt-1">
                        <option value="">-- Seleccione --</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <x-input-label for="stock" :value="__('Stock')" />
                    <x-text-input id="stock" class="block mt-1 w-full" type="text" wire:model="stock"
                        :value="old('stock')" placeholder="Stock" />
                    <x-input-error :messages="$errors->get('stock')" class="mt-2" />
                </div>
            </div>

        </fieldset>
        <fieldset class="border border-custom-red p-4 rounded-md mb-4">
            <legend class="text-custom-red text-lg uppercase px-1">Discos</legend>
            <div class="md:grid md:grid-cols-3 gap-4">
                <div>
                    <x-input-label for="anio_edicion" :value="__('Año de edición')" />
                    <x-text-input id="anio_edicion" class="block mt-1 w-full" type="text" wire:model="anio_edicion"
                        :value="old('anio_edicion')" placeholder="Año de edición" />
                    <x-input-error :messages="$errors->get('anio_edicion')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="sello" :value="__('Sello')" />
                    <x-text-input id="sello" class="block mt-1 w-full" type="text" wire:model="sello"
                        :value="old('sello')" placeholder="Sello" />
                    <x-input-error :messages="$errors->get('sello')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="formato" :value="__('Formato')" />
                    <select wire:model="formato" id="formato"
                        class="w-full border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm mt-1">
                        <option value="">-- Seleccione --</option>
                        @foreach ($formatos as $formato)
                            <option value="{{ $formato->id }}">{{ $formato->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>

        <fieldset class="border border-custom-red p-4 rounded-md mb-4">
            <legend class="text-custom-red text-lg uppercase px-1">Camisetas</legend>
            <div class="md:grid md:grid-cols-2 gap-4">
                <div>
                    <x-input-label for="color" :value="__('Color')" />
                    <x-text-input id="color" class="block mt-1 w-full" type="text" wire:model="color"
                        :value="old('color')" placeholder="Color" />
                    <x-input-error :messages="$errors->get('color')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="talla" :value="__('Talla')" />
                    <select wire:model="talla" id="talla"
                        class="w-full border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm mt-1">
                        <option value="">-- Seleccione --</option>
                        @foreach ($tallas as $talla)
                            <option value="{{ $talla->id }}">{{ $talla->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </fieldset>
        <div class="mt-4">
            <x-input-label for="informacion" :value="__('Información')" />
            <div wire:ignore>
                <textarea wire:model="informacion" id="informacion" wire:model.defer="informacion" wire:ignore
                    class="tinymce block mt-1 w-full h-52 border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"></textarea>
            </div>
        </div>
        <div class="mt-4">
            <x-input-label for="textos" :value="__('Textos')" />
            <div wire:ignore>
                <textarea wire:model="textos" id="textos" wire:model.defer="textos" wire:ignore
                    class="tinymce block mt-1 w-full h-52 border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"></textarea>
            </div>
        </div>


        <x-primary-button class="w-full mt-4 justify-center">Guardar Cambios</x-primary-button>
        @if ($errors->any())
            <div class="mt-4 text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
    <x-link :href="route('admin.productos.index')" class="p-4">Volver</x-link>
</div>
@push('scripts')
    <script>
        tinymce.init({
            selector: 'textarea#informacion, textarea#textos',
            plugins: 'link code lists',
            toolbar: 'undo redo | bold italic underline | bullist numlist | outdent indent link code',
            language_url: '/js/langs/es.js',
            language: 'es',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set(editor.id, editor.getContent());
                });
            }
        });
    </script>
@endpush
