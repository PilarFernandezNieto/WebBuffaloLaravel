<div>
    <form class="flex flex-col gap-5" wire:submit.prevent='crearUsuario' method="POST">
        <div class="flex flex-col gap-1.5">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block w-full" type="text" wire:model="name" :value="old('name')"
                placeholder="Nombre y apellidos" />
            <x-input-error :messages="$errors->get('name')" />
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block w-full" type="text" wire:model="email" :value="old('email')"
                placeholder="nombre@theelectricbuffalo.com" />
            <x-input-error :messages="$errors->get('email')" />
        </div>

        <div class="flex flex-col gap-1.5">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="block w-full" type="password" wire:model="password"
                :value="old('password')" placeholder="Contraseña" />
            <x-input-error :messages="$errors->get('password')" />
        </div>

        <div class="flex flex-col gap-3.5 bg-cream-white border border-rule-light rounded-sharp p-4">
            <div>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" wire:model="admin" id="admin"
                        class="w-5 h-5 accent-oxide rounded-sharp cursor-pointer">
                    <span class="text-sm font-semibold text-ink-body">Es administrador</span>
                </label>
                <x-input-error :messages="$errors->get('admin')" class="mt-1" />
            </div>
            <div>
                <label class="flex items-center gap-3 cursor-pointer">
                    <input type="checkbox" wire:model="verified" id="verified"
                        class="w-5 h-5 accent-oxide rounded-sharp cursor-pointer">
                    <span class="text-sm font-semibold text-ink-body">Verificado</span>
                </label>
                <x-input-error :messages="$errors->get('verified')" class="mt-1" />
            </div>
        </div>

        <div class="flex gap-3.5 mt-2">
            <x-primary-button>Guardar</x-primary-button>
            <x-link :href="route('admin.usuarios.index')" class="flex items-center min-h-[50px]">Cancelar</x-link>
        </div>
    </form>
</div>
