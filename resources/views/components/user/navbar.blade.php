<nav class="fixed top-0 w-full bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 shadow-lg z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo/Brand -->
            <div class="flex-shrink-0">
                <a href="/"
                    class="text-white font-bold text-xl tracking-wider hover:text-indigo-100 transition-colors duration-300">
                    Your Brand
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="flex md:hidden">
                <button type="button" id="mobile-menu-button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-white hover:bg-purple-600 focus:outline-none transition-colors duration-300">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-8">
                <a href="/"
                    class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                    Home
                </a>
                <!-- Dropdown -->
                <div class="relative group">
                    <button
                        class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:-translate-y-0.5 inline-flex items-center">
                        <span>Products</span>
                        <svg class="ml-2 h-4 w-4 transition-transform duration-300 group-hover:rotate-180"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right">
                        <div class="py-1">
                            <a href="{{ route('produk') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-300">
                                Paket Kami
                            </a>
                            <a href="/products/sale"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-600 transition-colors duration-300">
                                On Sale
                            </a>
                        </div>
                    </div>
                </div>
                <a href="/about"
                    class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                    About
                </a>
                <a href="/contact"
                    class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                    Contact
                </a>
                <a href="{{ route('loginPage') }}"
                    class="text-white hover:bg-white/10 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:-translate-y-0.5">
                    Login
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
            <a href="/"
                class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                Home
            </a>
            <button id="mobile-dropdown-button"
                class="w-full text-left text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300 flex justify-between items-center">
                <span>Products</span>
                <svg class="h-4 w-4 transform transition-transform duration-300" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="hidden pl-4 space-y-1" id="mobile-dropdown">
                <a href="/products/new"
                    class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                    New Arrivals
                </a>
                <a href="/products/featured"
                    class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                    Featured
                </a>
                <a href="/products/sale"
                    class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                    On Sale
                </a>
            </div>
            <a href="/about"
                class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                About
            </a>
            <a href="/contact"
                class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                Contact
            </a>
            <a href="{{ route('loginPage') }}"
                class="block text-white hover:bg-white/10 px-3 py-2 rounded-md text-base font-medium transition-colors duration-300">
                Login
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });

        // Mobile dropdown toggle
        const mobileDropdownButton = document.getElementById('mobile-dropdown-button');
        const mobileDropdown = document.getElementById('mobile-dropdown');
        const dropdownIcon = mobileDropdownButton.querySelector('svg');

        mobileDropdownButton.addEventListener('click', function() {
            mobileDropdown.classList.toggle('hidden');
            dropdownIcon.classList.toggle('rotate-180');
        });
    });
</script>
