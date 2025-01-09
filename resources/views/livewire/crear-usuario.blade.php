<div class="flex flex-col items-center justify-center p-5">
    <form class="w-95p lg:w-4/5 mx-auto" wire:submit.prevent='crearUsuario' method="POST">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" wire:model="name" :value="old('name')"
                placeholder="Nombre" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" wire:model="email" :value="old('email')"
                placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" wire:model="password" :value="old('password')"
                placeholder="Contraseña" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4 flex justify-evenly">
            <div>
                <div class="flex gap-4 items-center">
                    <x-input-label for="admin" :value="__('Es Admin')" />
                    <input type="checkbox" wire:model="admin" id="admin"
                        class="border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm">
                </div>
                <x-input-error :messages="$errors->get('admin')" class="mt-2" />
            </div>
            <div>
                <div class="flex gap-4 items-center">
                    <x-input-label for="verified" :value="__('Verificado')" />
                    <input type="checkbox" wire:model="verified" id="verified"
                        class="border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm">
                </div>
                <x-input-error :messages="$errors->get('verified')" class="mt-2" />
            </div>
        </div>


        <x-primary-button class="w-full mt-4 justify-center">Crear</x-primary-button>
    </form>
    <x-link :href="route('admin.usuarios.index')" class="p-4">Volver</x-link>
</div>
