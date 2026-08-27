@php
    $tabs = [
        ['label' => 'Usuarios', 'route' => 'admin.usuarios.index', 'active' => request()->routeIs('admin.usuarios.*')],
        ['label' => 'Músicos', 'route' => 'admin.musicos.index', 'active' => request()->routeIs('admin.musicos.*')],
        ['label' => 'Noticias', 'route' => 'admin.noticias.index', 'active' => request()->routeIs('admin.noticias.*')],
        ['label' => 'Contenidos', 'route' => 'admin.contenidos.index', 'active' => request()->routeIs('admin.contenidos.*')],
        [
            'label' => 'Productos',
            'route' => 'admin.productos.index',
            'active' => request()->routeIs('admin.productos.*') || request()->routeIs('admin.discos.*') || request()->routeIs('admin.camisetas.*'),
        ],
    ];
@endphp
<nav aria-label="Secciones"
    class="bg-cream-hover border-b border-rule-light px-[clamp(16px,3vw,32px)] flex gap-[clamp(4px,1vw,10px)] flex-wrap">
    @foreach ($tabs as $tab)
        <a href="{{ route($tab['route']) }}" @if ($tab['active']) aria-current="page" @endif
            class="flex items-center min-h-12 px-[clamp(12px,2vw,18px)] font-cuerpo text-[13px] tracking-[1px] uppercase border-b-[3px] transition duration-200 {{ $tab['active'] ? 'font-bold text-ink-heading border-oxide-light' : 'font-semibold text-ink-muted border-transparent hover:text-ink-heading' }}">
            {{ $tab['label'] }}
        </a>
    @endforeach
</nav>
