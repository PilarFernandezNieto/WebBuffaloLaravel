<nav x-data="{ open: false }" >
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-1 flex items-center py-4">
                    <a href="{{ route('welcome') }}">
                        <x-application-logo class="block w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex items-center">
                    <x-nav-link :href="route('admin.usuarios.index')" :active="request()->routeIs('admin.usuarios.index')">
                        {{ __('Usuarios') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.musicos.index')" :active="request()->routeIs('admin.musicos.index')">
                        {{ __('Musicos') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.noticias.index')" :active="request()->routeIs('admin.noticias.index')">
                        {{ __('Noticias') }}
                    </x-nav-link>
                    <x-nav-link :href="route('admin.contenidos.index')" :active="request()->routeIs('admin.contenidos.index')">
                        {{ __('Contenidos') }}
                    </x-nav-link>
                    <x-dropdown-menu align="right" width="48" :active="request()->routeIs('admin.productos.*')">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent  text-sm leading-5 font-medium text-gray-500 hover:text-gray-700 hover:border-b-gray-300 transition duration-500 ease-in-out">
                                <div>Productos</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('admin.productos.index')">
                                {{ __('Listado de productos') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('admin.discos.index')">
                                {{ __('Discos') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('admin.camisetas.index')">
                                {{ __('Camisetas') }}
                            </x-dropdown-link>

                        </x-slot>
                    </x-dropdown-menu>
                    <x-nav-link :href="route('welcome')" >
                        {{ __('Inicio') }}
                    </x-nav-link>
                </div>

            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-500">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
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

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-500 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('admin.musicos.index')" :active="request()->routeIs('admin.musicos.index')">
                {{ __('Músicos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.noticias.index')" :active="request()->routeIs('admin.noticias.index')">
                {{ __('Noticias') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('admin.contenidos.index')" :active="request()->routeIs('admin.contenidos.index')">
                {{ __('Contenidos') }}
            </x-responsive-nav-link>

            <x-dropdown-menu align="right" width="48" :active="request()->routeIs('admin.productos')" >
                <x-slot name="trigger">
                    <button class="flex items-center w-full ps-3 pe-4 py-2 border-l-4 active:border-custom-red text-start text-base font-medium text-gray-700 active:bg-gray-50 focus:outline-none focus:text-custom-red transition duration-500 ease-in-out">
                        <div>Productos</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('admin.productos.index')">
                        {{ __('Listado de productos') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.discos.index')">
                        {{ __('Discos') }}
                    </x-dropdown-link>
                    <x-dropdown-link :href="route('admin.camisetas.index')">
                        {{ __('Camisetas') }}
                    </x-dropdown-link>

                </x-slot>
            </x-dropdown-menu>
        </div>

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
    </div>
</nav>
