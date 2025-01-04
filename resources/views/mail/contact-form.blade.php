<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Electric Buffalo </title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>

</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased fuente-principal ">
    <div class=" w-4/6 mx-auto mt-8 bg-white border border-gray-200 rounded-lg shadow-md ">
        <!-- Header -->
        <div class="bg-custom-white text-custom-red text-center py-4">
            <h1 class="text-2xl font-semibold">Mensaje Recibido desde la Web</h1>
        </div>
        <!-- Content -->
        <div class="p-6">
            <p class="mb-4">
                <span class="font-semibold text-gray-700">Nombre: </span>
                <span class="text-gray-600">{{ $nombre }}</span>
            </p>
            <p class="mb-4">
                <span class="font-semibold text-gray-700">Email: </span>
                <span class="text-gray-600">{{ $email }}</span>
            </p>
            <p class="mb-4">
                <span class="font-semibold text-gray-700">Mensaje: </span>
                <span class="text-gray-600">{{ $mensaje }}</span>
            </p>
        </div>
        <!-- Footer -->
        <div class="text-center text-sm text-gray-500 py-4 border-t border-gray-200">
            &copy; {{ date('Y') }} The Electric Buffalo. Todos los derechos reservados.
        </div>
    </div>

