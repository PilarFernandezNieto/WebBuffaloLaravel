<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel Administrador - Editar Contenido') }}
        </h2>
    </x-slot>

    <div class="md:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold text-center mb-10 text-custom-red">Editar Contenido</h1>
                    {{-- <livewire:editar-musico :musico="$musico" /> --}}
                    <p>Formulario editar</p>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
