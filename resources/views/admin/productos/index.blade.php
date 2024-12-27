<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Administrador - Nuevo Producto') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            @if (session()->has('mensaje'))
                <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 m-3">
                    {{ session('mensaje') }}
                </div>
            @endif
            <livewire:listado-productos />

            <x-button-link :href="route('admin.productos.create')" class="mt-5">Nuevo Producto</x-button-link>

        </div>
    </div>
</x-admin-layout>
