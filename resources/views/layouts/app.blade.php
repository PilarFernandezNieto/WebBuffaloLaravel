<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Electric Buffalo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/91eae316a2.js" crossorigin="anonymous"></script>



    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @livewireStyles
   <style>
    .imagen-header {
    background-image: url("{{ asset('img/bufalos_header2.jpg') }}");
    background-position: 50%;
    background-size: cover;
    position: relative;
}
    </style>
</head>

<body class="font-sans antialiased fuente-principal">
    <nav x-data="{ open: false }" class="bg-black">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-0 ">
            <div class="flex justify-between">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex items-center py-4">
                        <a href="{{ route('admin.index') }}">
                            <img src="/img/logoBuf.png" alt="" class="w-3/4">
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex flex-col justify-center">
                        <div class=" hidden lg:block text-custom-white text-end text-2xl space-x-3">

                            <a href="https://www.youtube.com/@theelectricbuffalo666" class="youtube" target="_blank">
                                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/theelectricbuffalo/" class="insta" target="_blank">
                                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                                target="_blank">
                                <i class="fa-brands fa-spotify" aria-hidden="true"></i>
                            </a>
                            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank">
                                <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
                            </a>

                        </div>
                        <div class="hidden space-x-6 sm:-my-px sm:ms-10 sm:flex pt-4">
                            <x-link-nav :href="route('admin.musicos.index')" :active="request()->routeIs('admin.musicos.index')">
                                {{ __('Musicos') }}
                            </x-link-nav>
                            <x-link-nav :href="route('admin.noticias.index')" :active="request()->routeIs('admin.noticias.index')">
                                {{ __('Noticias') }}
                            </x-link-nav>

                            @auth
                                <!-- Settings Dropdown -->
                                <div class="hidden sm:flex sm:items-center sm:ms-6">
                                    <x-dropdown align="right" width="48">
                                        <x-slot name="trigger">
                                            <button
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                <div>{{ Auth::user()->name }}</div>

                                                <div class="ms-1">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-dropdown-link :href="route('profile.edit')">
                                                {{ __('Profile') }}
                                            </x-dropdown-link>

                                            <!-- Authentication -->
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf

                                                <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                                    {{ __('Cerrar sesión') }}
                                                </x-dropdown-link>
                                            </form>
                                        </x-slot>
                                    </x-dropdown>
                                </div>
                            @endauth
                        </div>
                    </div>

                </div>


                <!-- Settings Dropdown -->
                {{-- <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div> --}}

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-link-nav :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                    {{ __('Músicos') }}
                </x-responsive-link-nav>
                <x-responsive-link-nav :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                    {{ __('Noticias') }}
                </x-responsive-link-nav>
                <div class=" lg:hidden text-custom-white text-center text-2xl space-x-3">

                    <a href="https://www.youtube.com/@theelectricbuffalo666" class="youtube" target="_blank">
                        <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.instagram.com/theelectricbuffalo/" class="insta" target="_blank">
                        <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                        target="_blank">
                        <i class="fa-brands fa-spotify" aria-hidden="true"></i>
                    </a>
                    <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank">
                        <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
                    </a>

                </div>
            </div>

            @auth
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <x-responsive-nav-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-responsive-nav-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar sesión') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </nav>
    <div class="min-h-screen bg-gray-100 ">
        @if (request()->is('/'))
        <div class="imagen-header min-h-56 md:min-h-35 relative">
            <div class="bg-slate-950 opacity-25 absolute top-0 left-0 h-full w-full"></div>
            <div class="absolute z-10 p-7 bottom-4 left-40 w-4/5 space-y-8">
                <h2 class="text-custom-white fuente-bufalo text-4xl tracking-[0.5rem]">The Electric Buffalo</h2>
                <p class="text-custom-red fuente-bufalo text-6xl tracking-[2.5rem]">Patrolman</p>
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
            <h1>app.blade</h1>
            {{ $slot }}
        </main>
    </div>


    @livewireScripts
    @stack('scripts')
</body>

</html>
