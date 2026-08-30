<x-admin-layout>
    @include('admin.partials.tabs')

    <div class="max-w-5xl w-full mx-auto px-edge py-admin">

        <x-admin.page-heading eyebrow="Panel" :eyebrow-href="route('admin.index')" title="Usuarios">
            <x-button-link :href="route('admin.usuarios.create')">Nuevo usuario</x-button-link>
        </x-admin.page-heading>

        <x-admin.flash />

        <livewire:listado-usuarios />

    </div>
</x-admin-layout>
