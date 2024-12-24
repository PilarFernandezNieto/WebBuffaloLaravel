<div class=" md:w-1/2 mx-auto p-5">
    <h1 class="text-5xl mb-10">Contacto</h1>
    <form wire:submit.prevent='submit' method="POST" class="border border-1 rounded-lg p-4 border-slate-900">

        <div>
            <x-input-label for="nombre" :value="__('Nombre')"/>
            <x-text-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre" :value="old('nombre')"
                placeholder="Nombre" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')"
                placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-input-label for="mensaje" :value="__('mensaje')" />
            <div>
                <textarea wire:model="mensaje" id="texto" wire:model.defer="mensaje" wire:ignore
                    class="block mt-1 w-full h-52 border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"></textarea>
            </div>

        </div>
        {{-- <div class="mt-4">
            <div class="flex gap-4 items-center">
                <x-input-label for="portada" :value="__('Portada')" />
                <input type="checkbox" wire:model="portada" id="portada"
                    class="border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm">
            </div>
            <x-input-error :messages="$errors->get('portada')" class="mt-2" />
        </div> --}}


        <x-primary-button class="w-full mt-4 justify-center">Enviar</x-primary-button>
    </form>

</div>
