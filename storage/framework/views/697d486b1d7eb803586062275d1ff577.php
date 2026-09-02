<nav class="bg-red-600 shadow-lg sticky top-0 w-full z-50 border-b border-red-700 text-gray-200">
    <div class="max-w-6xl flex flex-wrap items-center justify-between mx-auto p-3 px-4">
        <!-- Logo -->
        <!-- Logo Link -->
        <a href="<?php echo e(route('home')); ?>" class="flex items-center shrink-0">
            <img src="<?php echo e(asset('storage/' . ($settings?->logo ?? ''))); ?>" class="h-10 sm:h-12 w-auto object-contain"
                alt="<?php echo e($settings?->site_name ?? 'Logo'); ?>" />
        </a>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-white rounded-lg md:hidden hover:bg-red-700 focus:outline-none"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round">
                <path id="top-line" d="M4 6h16" class="transition-all duration-300"></path>
                <path id="middle-line" d="M4 12h16" class="transition-all duration-300"></path>
                <path id="bottom-line" d="M4 18h16" class="transition-all duration-300"></path>
            </svg>
        </button>

        <!-- Navbar Links -->
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-red-500 rounded-lg bg-red-700 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent">
                <li>
                    <a href="<?php echo e(route('home')); ?>"
                        class="block py-2 px-3 rounded md:p-0 <?php echo e(request()->routeIs('home') ? 'text-white font-bold' : 'text-gray-200 hover:text-white'); ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo e(route('about')); ?>"
                        class="block py-2 px-3 rounded md:p-0 <?php echo e(request()->routeIs('about') ? 'text-white font-bold' : 'text-gray-200 hover:text-white'); ?>">About</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 rounded md:p-0 text-gray-200 hover:text-white">Services</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 rounded md:p-0 text-gray-200 hover:text-white">Pricing</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 rounded md:p-0 text-gray-200 hover:text-white">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\rubay\Desktop\travel-erp\travel-erp\resources\views/components/frontend/navbar.blade.php ENDPATH**/ ?>