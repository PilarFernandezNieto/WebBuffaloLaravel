<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Administrador') }}
        </h2>
    </x-slot>

    <div class="md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('mensaje'))
                <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 m-3">
                    {{ session('mensaje') }}
                </div>
            @endif
            <livewire:listado-noticias />

            <x-button-link :href="route('admin.noticias.create')" class="mt-5">Nueva Noticia</x-button-link>

        </div>
    </div>
</x-admin-layout>
