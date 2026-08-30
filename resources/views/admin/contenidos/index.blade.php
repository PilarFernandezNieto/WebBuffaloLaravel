<x-admin-layout>
    @include('admin.partials.tabs')

    <div class="max-w-5xl w-full mx-auto px-edge py-admin">

        <x-admin.page-heading eyebrow="Panel" :eyebrow-href="route('admin.index')" title="Contenidos">
            <x-button-link :href="route('admin.contenidos.create')">Nuevo contenido</x-button-link>
        </x-admin.page-heading>

        <x-admin.flash />

        <livewire:listado-contenidos />

    </div>
</x-admin-layout>
