<div class=" md:w-2/5 mx-auto p-5 bg-white mt-10">
    <h1 class="text-5xl mb-10">Contacta con nosotros</h1>
    @if (session()->has('success'))
        <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="uppercase border border-red-600 bg-red-100 text-red-600 font-bold p-2 my-3">
            {{ session('error') }}
        </div>
    @endif
    <p class="mb-4 text-sm">Utiliza este formulario o escríbenos a <a href="mailto:info@theelectricbuffalo.com"
            class="font-bold">info@theelectricbuffalo.com</a></p>

    <form wire:submit.prevent='submit' method="POST" class="rounded-lg p-4 shadow-md " novalidate>
        <div>
            <label for="nombre" class="block font-medium text-sm text-black uppercase">{{ __('Nombre') }}</label>
            <x-text-input id="nombre" class="block mt-1 w-full" type="text" wire:model="nombre" :value="old('nombre')"
                placeholder="Nombre" />
            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
        </div>
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-black uppercase">{{ __('Email') }}</label>
            <x-text-input id="email" class="block mt-1 w-full" type="email" wire:model="email" :value="old('email')"
                placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


        <div class="mt-4">
            <label for="mensaje" class="block font-medium text-sm text-black uppercase">{{ __('Mensaje') }}</label>
            <div>
                <textarea wire:model="mensaje" id="texto" wire:model.defer="mensaje" wire:ignore
                    class="block mt-1 w-full h-52 border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm"></textarea>
            </div>
            <x-input-error :messages="$errors->get('mensaje')" class="mt-2" />

        </div>
        <div class="mt-4">
            <div class="flex gap-4 items-center">
                <label for="privacidad"
                    class="block font-medium text-sm text-black uppercase">{{ __('Acepta la política de privacidad') }}</label>
                <input type="checkbox" wire:model="privacidad" id="privacidad"
                    class="border-gray-300 focus:border-custom-red focus:ring-custom-red rounded-md shadow-sm">
            </div>
            <x-input-error :messages="$errors->get('privacidad')" class="mt-2" />
        </div>


        <x-primary-button class="w-full mt-4 justify-center">Enviar</x-primary-button>
    </form>

</div>
