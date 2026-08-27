<x-admin-layout>
    <div class="max-w-[900px] w-full mx-auto px-edge py-[clamp(36px,6vw,72px)]">

        <p class="font-titulo italic text-oxide text-[13px] font-semibold uppercase tracking-[1.2px] mb-2.5">
            Panel de administración
        </p>
        <h1
            class="font-titulo font-black uppercase text-ink-heading leading-[1.02] tracking-[-0.02em] text-[clamp(28px,3.6vw,42px)] mb-3">
            Qué quieres gestionar
        </h1>
        <p class="text-ink-muted text-base leading-[1.7] max-w-[52ch] mb-[clamp(32px,4vw,48px)]">
            Elige una sección para ver, crear, editar o borrar registros.
        </p>

        <ul class="list-none m-0 p-0 grid gap-[clamp(14px,2vw,20px)]"
            style="grid-template-columns:repeat(auto-fill, minmax(min(100%, 260px), 1fr));">
            <li>
                <a href="{{ route('admin.usuarios.index') }}"
                    class="flex flex-col gap-2 min-h-[118px] p-[22px] bg-cream-field border border-rule-light border-l-[3px] border-l-oxide-light rounded-sharp transition duration-200 hover:bg-cream-hover hover:border-rule-input">
                    <span
                        class="font-titulo font-black uppercase text-ink-heading leading-[1.1] tracking-[-0.02em] text-[clamp(19px,2.2vw,23px)]">Usuarios</span>
                    <span class="text-sm leading-[1.6] text-ink-muted">Quién entra al panel y con qué permisos.</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.musicos.index') }}"
                    class="flex flex-col gap-2 min-h-[118px] p-[22px] bg-cream-field border border-rule-light border-l-[3px] border-l-oxide-light rounded-sharp transition duration-200 hover:bg-cream-hover hover:border-rule-input">
                    <span
                        class="font-titulo font-black uppercase text-ink-heading leading-[1.1] tracking-[-0.02em] text-[clamp(19px,2.2vw,23px)]">Músicos</span>
                    <span class="text-sm leading-[1.6] text-ink-muted">Miembros de la banda, biografías y
                        retratos.</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.noticias.index') }}"
                    class="flex flex-col gap-2 min-h-[118px] p-[22px] bg-cream-field border border-rule-light border-l-[3px] border-l-oxide-light rounded-sharp transition duration-200 hover:bg-cream-hover hover:border-rule-input">
                    <span
                        class="font-titulo font-black uppercase text-ink-heading leading-[1.1] tracking-[-0.02em] text-[clamp(19px,2.2vw,23px)]">Noticias</span>
                    <span class="text-sm leading-[1.6] text-ink-muted">Conciertos, festivales y novedades.</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.contenidos.index') }}"
                    class="flex flex-col gap-2 min-h-[118px] p-[22px] bg-cream-field border border-rule-light border-l-[3px] border-l-oxide-light rounded-sharp transition duration-200 hover:bg-cream-hover hover:border-rule-input">
                    <span
                        class="font-titulo font-black uppercase text-ink-heading leading-[1.1] tracking-[-0.02em] text-[clamp(19px,2.2vw,23px)]">Contenidos</span>
                    <span class="text-sm leading-[1.6] text-ink-muted">Textos de las páginas y discografía.</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.productos.index') }}"
                    class="flex flex-col gap-2 min-h-[118px] p-[22px] bg-cream-field border border-rule-light border-l-[3px] border-l-oxide-light rounded-sharp transition duration-200 hover:bg-cream-hover hover:border-rule-input">
                    <span
                        class="font-titulo font-black uppercase text-ink-heading leading-[1.1] tracking-[-0.02em] text-[clamp(19px,2.2vw,23px)]">Productos</span>
                    <span class="text-sm leading-[1.6] text-ink-muted">Discos y merch de la tienda.</span>
                </a>
            </li>
        </ul>

    </div>
</x-admin-layout>
