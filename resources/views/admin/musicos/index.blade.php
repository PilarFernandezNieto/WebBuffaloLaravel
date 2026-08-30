<x-admin-layout>
    @include('admin.partials.tabs')

    <div class="max-w-5xl w-full mx-auto px-edge py-admin">

        <x-admin.page-heading eyebrow="Panel" :eyebrow-href="route('admin.index')" title="Músicos">
            <x-button-link :href="route('admin.musicos.create')">Nuevo músico</x-button-link>
        </x-admin.page-heading>

        <x-admin.flash />

        <livewire:listado-musicos />

    </div>
</x-admin-layout>
