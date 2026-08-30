<x-admin-layout>
    @include('admin.partials.tabs')

    <div class="max-w-5xl w-full mx-auto px-edge py-admin">

        <x-admin.page-heading eyebrow="Panel" :eyebrow-href="route('admin.index')" title="Discos">
            <x-button-link :href="route('admin.productos.create')">Nuevo producto</x-button-link>
        </x-admin.page-heading>

        <nav aria-label="Tipo de producto" class="flex gap-2 flex-wrap mb-6">
            <a href="{{ route('admin.productos.index') }}"
                class="text-xs font-bold uppercase tracking-[1px] px-4 py-2 rounded-sharp border {{ request()->routeIs('admin.productos.index') ? 'bg-oxide text-cream-white border-oxide' : 'border-rule-input text-ink-muted hover:border-oxide hover:text-oxide' }}">Todos</a>
            <a href="{{ route('admin.discos.index') }}"
                class="text-xs font-bold uppercase tracking-[1px] px-4 py-2 rounded-sharp border {{ request()->routeIs('admin.discos.*') ? 'bg-oxide text-cream-white border-oxide' : 'border-rule-input text-ink-muted hover:border-oxide hover:text-oxide' }}">Discos</a>
            <a href="{{ route('admin.camisetas.index') }}"
                class="text-xs font-bold uppercase tracking-[1px] px-4 py-2 rounded-sharp border {{ request()->routeIs('admin.camisetas.*') ? 'bg-oxide text-cream-white border-oxide' : 'border-rule-input text-ink-muted hover:border-oxide hover:text-oxide' }}">Camisetas</a>
        </nav>

        <x-admin.flash />

        <livewire:listado-discos />

    </div>
</x-admin-layout>
