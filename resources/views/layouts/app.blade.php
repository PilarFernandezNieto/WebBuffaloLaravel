<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Electric Buffalo | {!! e($pageTitle) !!}</title>
    <meta name="description"
        content="The Electric Buffalo: banda de rock de Asturias con influencias de The Allman Brothers y Gov't Mule. Historia, discos y conciertos.">
    <meta name="robots" content="index, follow">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Electric Buffalo" />
    <meta property="og:description"
        content="Banda de rock de Asturias con influencias de The Allman Brothers y Gov't Mule. Descubre su historia y su música." />
    <meta property="og:url" content="https://www.theelectricbuffalo.com" />

    <!-- Styles / Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap">
    </noscript>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script defer src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>


    {{-- <link rel="preload" as="image" href="{{ asset('img/bufalos_header2.webp') }}" fetchpriority="high"> --}}



    @livewireStyles
    @stack('styles')

    <style>



    </style>
    <!-- Google Consent Mode - Default (denied) -->
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'analytics_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'personalization_storage': 'denied',
            'wait_for_update': 500
        });
    </script>
    <!-- End Google Consent Mode -->

    <!-- CookieScript -->
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/fa5545b6c667adb43097b75a9bf07211.js"
        data-navigate-track="reload"></script>
    <!-- End CookieScript -->

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

<body class="font-cuerpo antialiased fuente-principal bg-cream text-ink-body">
    <a href="#contenido"
        class="absolute left-[-9999px] top-2 z-[999] focus:left-2 bg-ink text-cream-white font-cuerpo text-sm font-bold px-4 py-2 rounded-sharp transition-all">
        Saltar al contenido
    </a>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KL6BXLJP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('layouts.navigation-public')

    <div class="min-h-screen">
        <!-- Page Heading -->
        @isset($header)
            <header class="bg-cream-white border-b border-rule-light">
                <div class="max-w-content mx-auto py-6 px-edge">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main id="contenido">
            {{ $slot }}
        </main>
        <x-footer />
    </div>


    @livewireScripts
    @stack('scripts')
</body>



</html>
