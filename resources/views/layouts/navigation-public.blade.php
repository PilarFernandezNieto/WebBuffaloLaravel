<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-ink shadow-[0_10px_30px_rgba(35,26,19,0.28)]">
    <div class="max-w-home mx-auto flex flex-wrap items-center justify-between gap-y-3 px-[clamp(18px,4vw,40px)] py-[10px]">

        <!-- Logo -->
        <a href="{{ route('welcome') }}" aria-label="The Electric Buffalo — Inicio" class="shrink-0">
            <img src="/img/logoBuf.webp" alt="The Electric Buffalo" class="h-[clamp(44px,7vw,68px)] w-auto object-contain">
        </a>

        <!-- Navigation Links -->
        <div class="hidden lg:flex items-center gap-6">
            <x-link-nav :href="route('historia')" :active="request()->routeIs('historia')">
                {{ __('Historia') }}
            </x-link-nav>
            <x-link-nav :href="route('banda')" :active="request()->routeIs('banda')">
                {{ __('La Banda') }}
            </x-link-nav>
            <x-link-nav :href="route('discografia')" :active="request()->routeIs('discografia*')">
                {{ __('Discografía') }}
            </x-link-nav>
            <x-link-nav :href="route('tienda')" :active="request()->routeIs('tienda')">
                {{ __('Tienda') }}
            </x-link-nav>
            <x-link-nav :href="route('contacto')" :active="request()->routeIs('contacto')">
                {{ __('Contacto') }}
            </x-link-nav>

            @auth
                <div class="ms-2">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center gap-1 px-3 py-2 text-xs font-semibold uppercase tracking-[1px] text-cream/90 hover:text-amber transition duration-200">
                                {{ Auth::user()->name }}
                                <svg class="h-3 w-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link :href="route('admin.index')">{{ __('Admin') }}</x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')">{{ __('Profile') }}</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
        </div>

        <!-- Social icons -->
        <div class="hidden lg:flex items-center gap-3">
            <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" target="_blank" aria-label="Facebook de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 text-[15px] hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank" aria-label="Instagram de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 text-[15px] hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank" aria-label="YouTube de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 text-[15px] hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" aria-label="Bandcamp de The Electric Buffalo"
                class="flex h-11 w-11 items-center justify-center rounded-full border border-[#6B5744] text-cream/90 text-[15px] hover:border-amber hover:text-amber transition duration-200 ease-in-out">
                <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
            </a>
        </div>

        <!-- Hamburger -->
        <div class="flex items-center lg:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 rounded-sharp text-cream hover:text-amber focus:outline-none transition duration-200 ease-in-out"
                :aria-expanded="open.toString()" :aria-label="open ? 'Cerrar menú' : 'Abrir menú'">
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

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden border-t border-[#463729] pt-4 pb-4 px-[clamp(18px,4vw,40px)]">
        <div class="flex justify-center text-cream/90 text-2xl gap-4">
            <a href="https://www.facebook.com/TheElectricBuffalo?locale=es_ES" target="_blank" aria-label="Icono Facebook" class="hover:text-amber transition duration-200">
                <i class="fa-brands fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/theelectricbuffalo/" target="_blank" aria-label="Icono Instagram" class="hover:text-amber transition duration-200">
                <i class="fa-brands fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="https://www.youtube.com/@theelectricbuffalo666" target="_blank" aria-label="Icono Youtube" class="hover:text-amber transition duration-200">
                <i class="fa-brands fa-youtube" aria-hidden="true"></i>
            </a>
            <a href="https://theelectricbuffalo.bandcamp.com/" target="_blank" aria-label="Icono Bandcamp" class="hover:text-amber transition duration-200">
                <i class="fa-brands fa-bandcamp" aria-hidden="true"></i>
            </a>
        </div>
        <div class="pt-4 space-y-1">
            <x-responsive-link-nav :href="route('historia')" :active="request()->routeIs('historia')">{{ __('Historia') }}</x-responsive-link-nav>
            <x-responsive-link-nav :href="route('banda')" :active="request()->routeIs('banda')">{{ __('La Banda') }}</x-responsive-link-nav>
            <x-responsive-link-nav :href="route('discografia')" :active="request()->routeIs('discografia*')">{{ __('Discografía') }}</x-responsive-link-nav>
            <x-responsive-link-nav :href="route('tienda')" :active="request()->routeIs('tienda')">{{ __('Tienda') }}</x-responsive-link-nav>
            <x-responsive-link-nav :href="route('contacto')" :active="request()->routeIs('contacto')">{{ __('Contacto') }}</x-responsive-link-nav>
        </div>

        @auth
            <div class="pt-4 pb-1 border-t border-[#463729] mt-4">
                <div class="px-1">
                    <div class="font-medium text-base text-cream">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-cream/60">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('admin.index')">{{ __('Admin') }}</x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('profile.edit')">{{ __('Perfil') }}</x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Cerrar sesión') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>
