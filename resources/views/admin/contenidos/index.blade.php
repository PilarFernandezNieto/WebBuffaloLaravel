<x-admin-layout>
    @include('admin.partials.tabs')

    <div class="max-w-[1180px] w-full mx-auto px-edge py-[clamp(24px,3.5vw,44px)]">

        <x-admin.page-heading eyebrow="Panel" :eyebrow-href="route('admin.index')" title="Contenidos">
            <x-button-link :href="route('admin.contenidos.create')">Nuevo contenido</x-button-link>
        </x-admin.page-heading>

        <x-admin.flash />

        <livewire:listado-contenidos />

    </div>
</x-admin-layout>
