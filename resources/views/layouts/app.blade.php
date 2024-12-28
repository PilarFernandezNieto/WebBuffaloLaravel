<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Electric Buffalo | {{ $pageTitle }}</title>
    <meta name="description"
        content="The Electric Buffalo es una banda de rock asturiana que combina el espíritu del rock clásico americano con una energía moderna. Con influencias de The Allman Brothers y Gov't Mule, su sonido se caracteriza por riffs poderosos y una autenticidad que transmite la esencia del rock en su forma más pura">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Electric Buffalo" />
    <meta property="og:description"
        content="Descubre el potente sonido de la banda de rock asturiana The Electric Buffalo. Rock clásico con influencias americanas y energía contemporánea." />
    <meta property="og:url" content="https://www.theelectricbuffalo.com" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>

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
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QB6GV2DF3D');
    </script>
</head>

<body class="font-sans antialiased fuente-principal bg-gray-50">
    @include('layouts.navigation-public')

    <div class="min-h-screen ">
        @if (request()->is('/'))
            <div class=" imagen-header min-h-56 md:min-h-35 relative">
                <div class="bg-slate-950 opacity-25 absolute top-0 left-0 h-full w-full"></div>
                <div class="absolute z-10 p-7 bottom-4 md:left-4 lg:left-40 w-4/5 space-y-8 hidden md:block ">
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
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/fa5545b6c667adb43097b75a9bf07211.js">
    </script>
</body>



</html>
