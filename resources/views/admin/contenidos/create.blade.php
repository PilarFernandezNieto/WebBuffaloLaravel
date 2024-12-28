<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Administrador - Nuevo Contenido') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4">
        <div class="md:w-3/5 mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg text-gray-900 py-10">
            <h1 class="text-2xl font-bold text-center mb-10 text-custom-red">Nuevo Contenido</h1>
            <livewire:crear-contenido />
        </div>
    </div>
</x-admin-layout>
