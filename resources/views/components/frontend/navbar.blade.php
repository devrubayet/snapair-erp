<nav class="bg-red-600 shadow-lg outline-none fixed w-full z-20 top-0 start-0 border-b border-red-700 text-gray-200">
    <div class="max-w-6xl flex flex-wrap items-center justify-between mx-auto py-3 px-4">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/' . ($settings?->logo ?? '')) }}" class="h-16" alt="{{ $settings?->site_name ?? 'Logo' }}" />
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg md:hidden hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                <path id="top-line" d="M4 6h16" class="transition-all duration-300"></path>
                <path id="middle-line" d="M4 12h16" class="transition-all duration-300"></path>
                <path id="bottom-line" d="M4 18h16" class="transition-all duration-300"></path>
            </svg>
        </button>

        <!-- Navbar Links -->
        <div class="max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out w-full md:max-h-screen md:opacity-100 md:block md:w-auto"
            id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-2 bg-red-700 md:bg-transparent rounded-lg md:rounded-none md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                <li>
                    <a href="{{ route('home') }}"
                        class="block py-2 px-3 rounded md:bg-transparent md:p-0 {{ request()->routeIs('home') ? 'text-white font-bold bg-red-800 md:bg-transparent' : 'text-gray-200 hover:bg-red-800 md:hover:bg-transparent md:hover:text-white' }}"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="block py-2 px-3 rounded md:bg-transparent md:p-0 {{ request()->routeIs('about') ? 'text-white font-bold bg-red-800 md:bg-transparent' : 'text-gray-200 hover:bg-red-800 md:hover:bg-transparent md:hover:text-white' }}">About</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 rounded md:bg-transparent md:p-0 text-gray-200 hover:bg-red-800 md:hover:bg-transparent md:hover:text-white">Services</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 rounded md:bg-transparent md:p-0 text-gray-200 hover:bg-red-800 md:hover:bg-transparent md:hover:text-white">Pricing</a>
                </li>
                <li>
                    <a href="#"
                        class="block py-2 px-3 rounded md:bg-transparent md:p-0 text-gray-200 hover:bg-red-800 md:hover:bg-transparent md:hover:text-white">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>