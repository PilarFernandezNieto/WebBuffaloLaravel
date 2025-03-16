<nav x-data="{ open: false }" class="bg-black">
    <!-- Primary Navigation Menu -->
    <div class="w-95p lg:w-4/5 mx-auto max-w-1300px px-4 sm:px-6 lg:px-0 ">
        <div class="flex justify-between">
            <div class="grid grid-cols-12 items-end py-4">
                <!-- Logo -->
                <div class="col-span-6 md:col-span-5 flex items-center">
                    <a href="{{ route('welcome') }}">
                        <img src="/img/logoBuf.png" alt="logo" class="w-full md:w-full lg:w-3/4 m-3 lg:-ml-4">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="col-span-7 flex flex-col justify-center">
                    <div class="hidden lg:block text-custom-white text-end text-2xl space-x-3">
                        <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" class="hover:text-custom-red"
                            target="_blank" aria-label="Icono Facebook">
                            <i class="fa-brands fa-facebook" aria-hidden="true"></i>
                        </a>

                        <a href="https://www.youtube.com/@theelectricbuffalo666" class="hover:text-custom-red"
                            target="_blank" aria-label="Icono Youtube">
                            <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/theelectricbuffalo/" class="hover:text-custom-red"
                            target="_blank" aria-label="Icono Instagram">
                            <i class="fa-brands fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                            target="_blank" class="hover:text-custom-red" aria-label="Icono Spotify">
                            <i class="fa-brands fa-spotify" aria-hidden="true"></i>
                        </a>
                        <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" class="hover:text-custom-red"
                            aria-label="Icono Bandcamp">
                            <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
                        </a>

                    </div>
                    <div class="hidden md:hidden lg:flex space-x-6 sm:-my-px sm:ms-10 pt-4 justify-end">
                        <x-link-nav :href="route('historia')" :active="request()->routeIs('historia')">
                            {{ __('Historia') }}
                        </x-link-nav>
                        <x-link-nav :href="route('banda')" :active="request()->routeIs('banda')">
                            {{ __('La Banda') }}
                        </x-link-nav>
                        <x-link-nav :href="route('discografia')" :active="request()->routeIs('discografia')">
                            {{ __('Discografía') }}
                        </x-link-nav>
                        <x-link-nav :href="route('tienda')" :active="request()->routeIs('tienda')">
                            {{ __('Tienda') }}
                        </x-link-nav>
                        <x-link-nav :href="route('contacto')" :active="request()->routeIs('contacto')">
                            {{ __('Contacto') }}
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
                                        <x-dropdown-link :href="route('admin.index')">
                                            {{ __('Admin') }}
                                        </x-dropdown-link>
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

            <!-- Hamburger -->
            <div class="-me-2 flex items-center lg:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-custom-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden border border-t-1  border-gray-200 pt-4">
        <div class=" lg:hidden text-custom-white text-center text-2xl space-x-3">
            <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES"
                target="_blank" aria-label="Icono Facebook">
                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/@theelectricbuffalo666" class="youtube" target="_blank" aria-label="Icono Youtube">
                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" class="insta" target="_blank" aria-label="Icono Instagram">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://open.spotify.com/intl-es/artist/4ciUFLaycqUBlM162ifmSH?si=eugYIzlWQnqkxGXJMXzYcw"
                target="_blank" aria-label="Icono Spotify">
                <i class="fa-brands fa-spotify" aria-hidden="true"></i>
            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" aria-label="Icono Bandcamp">
                <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
            </a>

        </div>
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-link-nav :href="route('historia')" :active="request()->routeIs('historia')">
                {{ __('Historia') }}
            </x-responsive-link-nav>
            <x-responsive-link-nav :href="route('banda')" :active="request()->routeIs('banda')">
                {{ __('La Banda') }}
            </x-responsive-link-nav>
            <x-responsive-link-nav :href="route('discografia')" :active="request()->routeIs('discografia')">
                {{ __('Discografía') }}
            </x-responsive-link-nav>
            <x-responsive-link-nav :href="route('tienda')" :active="request()->routeIs('tienda')">
                {{ __('Tienda') }}
            </x-responsive-link-nav>
            <x-responsive-link-nav :href="route('contacto')" :active="request()->routeIs('contacto')">
                {{ __('Contacto') }}
            </x-responsive-link-nav>

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
