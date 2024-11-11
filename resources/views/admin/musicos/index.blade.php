<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Administrador') }}
        </h2>
    </x-slot>

    <div class="md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Musicos") }}
                </div>
                @if (session()->has('mensaje'))
                    <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 m-3">
                        {{session('mensaje')}}
                    </div>
                @endif
            </div>
            <x-button-link :href="route('admin.musicos.create')" class="mt-5">Nuevo Músico</x-button-link>

        </div>
    </div>
</x-admin-layout>
