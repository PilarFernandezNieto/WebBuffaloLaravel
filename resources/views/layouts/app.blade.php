<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Electric Buffalo | {!! e($pageTitle) !!}</title>
    <meta name="description"
        content="The Electric Buffalo es una banda de rock asturiana que combina el espíritu del rock clásico americano con una energía moderna. Con influencias de The Allman Brothers y Gov't Mule, su sonido se caracteriza por riffs poderosos y una autenticidad que transmite la esencia del rock en su forma más pura">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Electric Buffalo" />
    <meta property="og:description"
        content="Descubre el potente sonido de la banda de rock asturiana The Electric Buffalo. Rock clásico con influencias americanas y energía contemporánea." />
    <meta property="og:url" content="https://www.theelectricbuffalo.com" />

    <!-- Styles / Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet">
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
            background-image: url("{{ asset('img/bufalos_header2.webp') }}");
            background-position: 50%;
            background-size: cover;
            position: relative;
        }

        .imagen-central {
            background-image: url("{{ asset('img/imagen_central.webp') }}");
            background-position: 50%;
            background-size: cover;
        }

        .imagen-central-tienda {
            background-image: url("{{ asset('img/Banda.jpg') }}");
            background-position: 50%;
            background-size: cover;
        }
    </style>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KL6BXLJP');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="font-sans antialiased fuente-principal bg-stone-50">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6BXLJP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.navigation-public')

    <div class="min-h-screen ">
        @if (request()->is('/'))
            <div class="imagen-header min-h-[400px] md:min-h-[560px] relative">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                <div class="relative z-10 p-8 md:p-16 space-y-3 w-full">
                    <div class="absolute top-64 md:top-80 ">
                        <h1 class="font-titulo text-white text-4xl md:text-6xl tracking-[0.5rem]">
                            The Electric Buffalo
                        </h1>
                        <p class="font-titulo text-custom-red text-5xl md:text-7xl tracking-[0.3rem]">
                            Patrolman
                        </p>
                    </div>
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
