<x-admin-layout>
    @include('admin.partials.tabs')

    <div class="max-w-[1180px] w-full mx-auto px-edge py-[clamp(24px,3.5vw,44px)]">

        <x-admin.page-heading eyebrow="Panel" :eyebrow-href="route('admin.index')" title="Camisetas">
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

        <livewire:listado-camisetas />

    </div>
</x-admin-layout>
