<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-cuerpo antialiased bg-cream text-ink-body">
    @if (session('error'))
        <div
            class="uppercase border-l-4 border-oxide bg-cream-white text-oxide font-bold text-sm p-3 m-4 rounded-sharp text-center">
            {{ session('error') }}
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center px-edge py-[clamp(24px,5vw,64px)]">
        <main class="w-full max-w-[420px]">

            <div class="flex items-center gap-3 mb-6">
                <a href="{{ route('welcome') }}">

                    <x-application-logo />

                </a>
            </div>

            {{ $slot }}
        </main>
    </div>

    @stack('scripts')
</body>

</html>
