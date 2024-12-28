<div class="flex flex-col items-center justify-center gap-4">
    <form class="w-[95%] lg:w-[80%] mx-auto" wire:submit.prevent='editarNoticia' method="POST">

        <div>
            <x-input-label for="titulo" :value="__('Título')" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"
                placeholder="Título" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="intro" :value="__('Introducción')" />
            <x-text-input id="intro" class="block mt-1 w-full" type="text" wire:model="intro" :value="old('intro')"
                placeholder="Introducción" />
            <x-input-error :messages="$errors->get('intro')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="fecha" :value="__('Fecha')" />
            <x-text-input id="fecha" class="block mt-1 w-full" type="date" wire:model="fecha" :value="old('fecha')"
                placeholder="Fecha" />
            <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="texto" :value="__('Texto')" />
            <div wire:ignore>
                <textarea wire:model="texto" id="texto" wire:model.defer="texto" wire:ignore
                    class="block mt-1 w-full h-52 border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"></textarea>
            </div>

        </div>
        <div class="mt-4">
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen_nueva"
                accept="image/*" />
            <div class="my-5 w-80">
                <x-input-label :value="__('Imagen Actual')" />
                <img src="{{ asset('/storage/imagenes/' . $imagen) }}" alt="{{ 'Imagen ' . $id }}">
            </div>
            <div class="my-5 w-80">
                @if ($imagen_nueva)
                    Imagen nueva:
                    <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Imagen Noticia">
                @endif
            </div>

            <x-input-error :messages="$errors->get('imagen_nueva')" class="mt-2" />
        </div>
        <div class="mt-4">
            <div class="flex gap-4 items-center">
                <x-input-label for="portada" :value="__('Portada')" />
                <input type="checkbox" wire:model="portada" id="portada"
                    class="border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"
                    {{ $portada ? 'checked' : '' }}>
            </div>
            <x-input-error :messages="$errors->get('portada')" class="mt-2" />
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
    <x-link :href="route('admin.noticias.index')" class="p-4">Volver</x-link>
</div>
@push('scripts')
    <script>
        tinymce.init({
            selector: '#texto',
            plugins: 'link code lists',
            toolbar: 'undo redo | bold italic underline | bullist numlist | outdent indent link code',
            language_url: '/js/langs/es.js',
            language: 'es',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('texto', editor.getContent());
                });
            }
        });
    </script>
@endpush

