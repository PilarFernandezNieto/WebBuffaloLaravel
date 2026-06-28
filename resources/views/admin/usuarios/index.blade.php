<x-admin-layout>
    <x-slot name="header">
        <x-admin-page-header title="Panel Administrador" />
    </x-slot>

    <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            @if (session()->has('mensaje'))
                <div class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-3">
                    {{ session('mensaje') }}
                </div>
            @endif
            <livewire:listado-usuarios />

            <x-button-link :href="route('admin.usuarios.create')" class="mt-5">Nuevo Usuario</x-button-link>

        </div>
    </div>
</x-admin-layout>
