<div class="md:flex md:flex-col md:items-center md:justify-center p-5">
    <form class="md:w-1/2" wire:submit.prevent='crearContenido' method="POST">

        <div>
            <x-input-label for="titulo" :value="__('Título')" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"
                placeholder="Título" />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
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
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen"
                accept="image/*" />
            <div class="my-5 w-80">
                @if ($imagen)
                    Imagen:
                    <img src="{{ $imagen->temporaryUrl() }}" alt="Imagen Músico">
                @endif
            </div>
            <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
        </div>
        <div class="grid grid-cols-2">
            <div class="mt-4">
                <div class="flex gap-4 items-center">
                    <x-input-label for="portada" :value="__('Portada')" />
                    <input type="checkbox" wire:model="portada" id="portada" class="border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm">
                </div>
                <x-input-error :messages="$errors->get('portada')" class="mt-2" />
            </div>
            <div class="mt-4 lg:mt-0">
                <div class="flex gap-4 items-center">
                    <x-input-label for="fecha" :value="__('Fecha')" />
                    <x-text-input id="fecha" class="block mt-1 w-full" type="date" wire:model="fecha"
                        :value="old('fecha')" placeholder="Fecha" />
                </div>
                <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
            </div>
        </div>
        <x-primary-button class="w-full mt-4 justify-center">Crear</x-primary-button>
    </form>
    <x-link :href="route('admin.contenidos.index')" class="p-4">Volver</x-link>
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
