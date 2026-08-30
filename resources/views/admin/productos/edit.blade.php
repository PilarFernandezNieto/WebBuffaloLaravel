<x-admin-layout>
    <div class="max-w-[900px] w-full mx-auto px-edge py-admin">
        <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-2">
            <a href="{{ route('admin.productos.index') }}">Productos</a>
        </p>
        <h1
            class="font-titulo font-black uppercase text-ink-heading leading-[1.05] tracking-[-0.02em] text-[clamp(26px,3.2vw,36px)] mb-[clamp(24px,3vw,32px)]">
            Editar producto
        </h1>

        <div class="bg-cream-field border border-rule-light rounded-sharp p-[clamp(20px,3vw,32px)]">
            <livewire:editar-producto :producto="$producto" />
        </div>
    </div>
</x-admin-layout>
