<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Admin</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    <script src="https://cdn.tiny.cloud/1/3mwpefylf87qmow9slz4sqdjz7toujobppay56nan6xsqdqp/tinymce/8/tinymce.min.js"
        referrerpolicy="origin" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/tinymce-config.js'])
    @livewireStyles
    @stack('styles')
</head>

<body class="font-cuerpo antialiased bg-cream text-ink-body">
    <a href="#contenido"
        class="absolute left-[-9999px] top-2 z-[999] focus:left-2 bg-ink text-cream-white font-cuerpo text-sm font-bold px-4 py-2 rounded-sharp transition-all">
        Saltar al contenido
    </a>

    <div class="min-h-screen flex flex-col">

        <header class="bg-ink px-[clamp(18px,4vw,40px)] py-[10px] flex items-center justify-between gap-4 flex-wrap">
            <div class="flex items-end gap-3.5 min-w-0">
                <a href="{{ route('admin.index') }}" class="shrink-0">
                    <img src="{{ asset('img/logo_blanco_transparente.png') }}" alt="The Electric Buffalo"
                        class="h-[clamp(38px,5.5vw,52px)] w-auto object-contain">
                </a>
                <span
                    class="text-[11px] font-bold tracking-[1.4px] uppercase text-amber border border-rule-on-dark px-[10px] py-[5px] rounded-sharp">Admin</span>
            </div>
            <div class="flex items-center gap-[clamp(14px,2.5vw,24px)] flex-wrap">
                <span class="text-sm text-cream/90">{{ Auth::user()->name }}</span>
                <a href="{{ route('welcome') }}"
                    class="text-xs font-semibold tracking-[1px] uppercase text-cream-white min-h-11 flex items-center hover:text-amber transition duration-200">
                    Ver la web
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="text-xs font-semibold tracking-[1px] uppercase text-amber min-h-11 flex items-center hover:text-amber/80 transition duration-200">
                        Salir
                    </button>
                </form>
            </div>
        </header>

        @isset($header)
            <div class="bg-cream-white border-b border-rule-light">
                <div class="max-w-content mx-auto py-6 px-edge">
                    {{ $header }}
                </div>
            </div>
        @endisset

        <main id="contenido" class="flex-1">
            {{ $slot }}
        </main>

        <footer class="bg-ink px-edge py-5 flex justify-between items-center flex-wrap gap-3">
            <span class="text-xs text-cream/70">The Electric Buffalo · Panel de administración</span>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="text-xs font-semibold tracking-[1px] uppercase text-amber hover:text-amber/80 transition duration-200">
                    Cerrar sesión
                </button>
            </form>
        </footer>
    </div>

    @livewireScripts
    @stack('scripts')
</body>

</html>
