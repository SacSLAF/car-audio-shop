<!-- Top Bar -->
<div class="bg-amber-600 text-white text-sm py-1">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span><i class="fas fa-phone mr-2"></i> +1 (555) 123-4567</span>
            <span><i class="fas fa-envelope mr-2"></i> info@caraudioshop.com</span>
        </div>
        <div class="flex items-center space-x-4">
            @auth
                <span>Welcome, {{ auth()->user()->name }}</span>
                @if(auth()->user()->isAdmin())
                    <a href="/admin" class="hover:text-amber-200"><i class="fas fa-user-shield mr-1"></i> Admin</a>
                @endif
                {{-- <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-amber-200"><i class="fas fa-sign-out-alt mr-1"></i> Logout</button>
                </form> --}}
            @else
                {{-- <a href="{{ route('login') }}" class="hover:text-amber-200"><i class="fas fa-sign-in-alt mr-1"></i> Login</a> --}}
                {{-- <a href="{{ route('register') }}" class="hover:text-amber-200"><i class="fas fa-user-plus mr-1"></i> Register</a> --}}
            @endauth
        </div>
    </div>
</div>

<!-- Main Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <div class="bg-amber-600 text-white p-2 rounded-lg mr-3">
                        <i class="fas fa-car-side text-2xl"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-extrabold text-amber-600">CarAudio</span>
                        <span class="text-2xl font-light text-gray-800">Shop</span>
                        <p class="text-xs text-gray-500 -mt-1">Premium Car Audio</p>
                    </div>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="/" class="text-gray-700 hover:text-amber-600 font-medium transition duration-300 {{ request()->is('/') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">Home</a>
                <a href="/shop" class="text-gray-700 hover:text-amber-600 font-medium transition duration-300 {{ request()->is('shop') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">Shop</a>
                <a href="/about" class="text-gray-700 hover:text-amber-600 font-medium transition duration-300 {{ request()->is('about') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">About</a>
                <a href="/services" class="text-gray-700 hover:text-amber-600 font-medium transition duration-300 {{ request()->is('services') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">Services</a>
                <a href="/gallery" class="text-gray-700 hover:text-amber-600 font-medium transition duration-300 {{ request()->is('gallery') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">Gallery</a>
                <a href="/contact" class="text-gray-700 hover:text-amber-600 font-medium transition duration-300 {{ request()->is('contact') ? 'text-amber-600 border-b-2 border-amber-600' : '' }}">Contact</a>
            </div>

            <!-- Right Side Icons -->
            <div class="flex items-center space-x-4">
                <!-- Search -->
                <button class="text-gray-700 hover:text-amber-600 transition" id="searchToggle">
                    <i class="fas fa-search text-xl"></i>
                </button>

                <!-- Cart -->
                <a href="/cart" class="text-gray-700 hover:text-amber-600 transition relative">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-amber-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">
                        0
                    </span>
                </a>

                <!-- Mobile Menu Toggle -->
                <button class="lg:hidden text-gray-700 hover:text-amber-600 transition" id="mobileMenuToggle">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div class="lg:hidden hidden" id="mobileMenu">
            <div class="pb-4 space-y-2">
                <a href="/" class="block text-gray-700 hover:text-amber-600 font-medium py-2 px-4 hover:bg-amber-50 rounded">Home</a>
                <a href="/shop" class="block text-gray-700 hover:text-amber-600 font-medium py-2 px-4 hover:bg-amber-50 rounded">Shop</a>
                <a href="/about" class="block text-gray-700 hover:text-amber-600 font-medium py-2 px-4 hover:bg-amber-50 rounded">About</a>
                <a href="/services" class="block text-gray-700 hover:text-amber-600 font-medium py-2 px-4 hover:bg-amber-50 rounded">Services</a>
                <a href="/gallery" class="block text-gray-700 hover:text-amber-600 font-medium py-2 px-4 hover:bg-amber-50 rounded">Gallery</a>
                <a href="/contact" class="block text-gray-700 hover:text-amber-600 font-medium py-2 px-4 hover:bg-amber-50 rounded">Contact</a>
            </div>
        </div>
    </div>
</nav>

<!-- Search Modal -->
<div class="hidden fixed inset-0 bg-black bg-opacity-50 z-50" id="searchModal">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-lg w-full max-w-2xl p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold">Search Products</h3>
                <button class="text-gray-500 hover:text-gray-700" id="closeSearch">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <form action="/shop" method="GET">
                <div class="flex">
                    <input type="text" name="search" placeholder="Search for products, brands..."
                           class="flex-1 px-4 py-3 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                    <button type="submit" class="bg-amber-600 text-white px-6 py-3 rounded-r-lg hover:bg-amber-700 transition">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Mobile Menu Toggle
    document.getElementById('mobileMenuToggle').addEventListener('click', function() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    // Search Modal
    document.getElementById('searchToggle').addEventListener('click', function() {
        document.getElementById('searchModal').classList.remove('hidden');
    });
    document.getElementById('closeSearch').addEventListener('click', function() {
        document.getElementById('searchModal').classList.add('hidden');
    });
    document.getElementById('searchModal').addEventListener('click', function(e) {
        if (e.target === this) {
            this.classList.add('hidden');
        }
    });
</script>
