<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Electric Buffalo</title>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>
    @livewireStyles
    @stack('styles')
    <style>
        .imagen-header {
            background-image: url("{{ asset('img/bufalos_header2.jpg') }}");
            background-position: 50%;
            background-size: cover;
            position: relative;
        }

        .imagen-central {
            background-image: url("{{ asset('img/imagen_central.jpg') }}");
            background-position: 50%;
            background-size: cover;
        }
        .imagen-central-tienda {
            background-image: url("{{ asset('img/Banda.jpg') }}");
            background-position: 50%;
            background-size: cover;
        }
    </style>
</head>

<body class="font-sans antialiased fuente-principal bg-gray-100">
    @include('layouts.navigation-public')

    <div class="min-h-screen ">
        @if (request()->is('/'))
            <div class=" imagen-header min-h-56 md:min-h-35 relative">
                <div class="bg-slate-950 opacity-25 absolute top-0 left-0 h-full w-full"></div>
                <div class="absolute z-10 p-7 bottom-4 left-40 w-4/5 space-y-8 hidden md:block ">
                    <h2 class="text-custom-white fuente-bufalo text-4xl tracking-[0.5rem]">The Electric Buffalo</h2>
                    <p class="text-custom-red fuente-bufalo text-6xl tracking-[2.5rem] ">Patrolman</p>
                </div>
            </div>
        @endif

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <x-footer />
    </div>


    @livewireScripts
    @stack('scripts')
</body>

</html>
