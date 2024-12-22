<div class="md:flex md:flex-col md:items-center md:justify-center p-5">
    <form class="md:w-1/2" wire:submit.prevent='crearMusico' method="POST">
        <div class="grid grid-cols-12 gap-3">
            <div class="col-span-5">
                <x-input-label for="nombre" :value="__('Nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre" :value="old('nombre')"
                    placeholder="Nombre" />
                <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
            </div>
            <div class="col-span-7">
                <x-input-label for="apellidos" :value="__('Apellidos')" />
                <x-text-input id="apellidos" class="block mt-1 w-full" type="text" wire:model="apellidos"
                    :value="old('apellidos')" placeholder="Apellidos" />
                <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
            </div>
        </div>
        <div class="lg:grid lg:grid-cols-3 gap-3 mt-4">
            <div>
                <x-input-label for="alias" :value="__('Alias')" />
                <x-text-input id="alias" class="block mt-1 w-full" type="text" wire:model="alias" :value="old('alias')"
                    placeholder="Alias" />
                <x-input-error :messages="$errors->get('alias')" class="mt-2" />
            </div>
            <div class="mt-4 lg:mt-0">
                <x-input-label for="origen" :value="__('Origen')" />
                <x-text-input id="origen" class="block mt-1 w-full" type="text" wire:model="origen" :value="old('origen')"
                    placeholder="Origen" />
                <x-input-error :messages="$errors->get('origen')" class="mt-2" />
            </div>
            <div class="mt-4 lg:mt-0">
                <x-input-label for="fecha_nac" :value="__('Fecha de nacimiento')" />
                <x-text-input id="fecha_nac" class="block mt-1 w-full" type="date" wire:model="fecha_nac"
                    :value="old('fecha_nac')" placeholder="Fecha de nacimiento" />
                <x-input-error :messages="$errors->get('fecha_nac')" class="mt-2" />
            </div>
        </div>

        <div class="mt-4">
            <x-input-label for="biografia" :value="__('Biografía')" />
            <div wire:ignore>
                <textarea wire:model="biografia" id="biografia" wire:model.defer="biografia" wire:ignore
                    class="block mt-1 w-full h-52 border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"></textarea>
            </div>

        </div>
        <div class="mt-4">
            <x-input-label for="imagen" :value="__('Imagen')" />
            <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" accept="image/*" />
            <div class="my-5 w-80">
                @if ($imagen)
                    Imagen:
                    <img src="{{ $imagen->temporaryUrl() }}" alt="Imagen Músico">
                @endif
            </div>
            <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
        </div>
        <x-primary-button class="w-full mt-4 justify-center">Crear</x-primary-button>
    </form>
    <x-link :href="route('admin.musicos.index')" class="p-4">Volver</x-link>
</div>
@push('scripts')
    <script>
        tinymce.init({
            selector: '#biografia',
            plugins: 'link code lists',
            toolbar: 'undo redo | bold italic underline | bullist numlist | outdent indent link code',
            language_url: '/js/langs/es.js',
            language: 'es',
            setup: function(editor) {
                editor.on('init change', function() {
                    editor.save();
                });
                editor.on('change', function(e) {
                    @this.set('biografia', editor.getContent());
                });
            }
        });
    </script>
@endpush
