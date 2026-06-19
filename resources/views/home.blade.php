@extends('layouts.app')

@section('title', 'Premium Car Audio & Accessories - CarAudio Shop')

@section('content')
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-amber-600 to-amber-800 text-white">
        <div class="absolute inset-0 bg-black opacity-30"></div>
        <div class="container mx-auto px-4 py-24 md:py-32 relative z-10">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6">
                    Upgrade Your Ride with
                    <span class="text-yellow-300">Premium Car Audio</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8">
                    Experience crystal clear sound quality with our top-of-the-line car audio systems, speakers, and
                    accessories.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/shop"
                        class="bg-white text-amber-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-shopping-bag mr-2"></i> Shop Now
                    </a>
                    <a href="/about"
                        class="border-2 border-white hover:bg-white hover:text-amber-600 px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center">
                        <i class="fas fa-play-circle mr-2"></i> Learn More
                    </a>
                </div>
                <div class="mt-12 flex flex-wrap gap-8">
                    <div>
                        <p class="text-3xl font-bold text-yellow-300">1000+</p>
                        <p class="text-gray-200">Happy Customers</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-yellow-300">500+</p>
                        <p class="text-gray-200">Products</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-yellow-300">50+</p>
                        <p class="text-gray-200">Top Brands</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Background Image (Optional) -->
        <div class="absolute inset-0 bg-cover bg-center opacity-20"
            style="background-image: url('https://images.unsplash.com/photo-1587829741301-dc798b83add3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');">
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-truck text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Free Shipping</h4>
                    <p class="text-gray-600">Free delivery on orders over $100</p>
                </div>
                <div class="text-center">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-undo-alt text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Easy Returns</h4>
                    <p class="text-gray-600">30-day return policy</p>
                </div>
                <div class="text-center">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Secure Payment</h4>
                    <p class="text-gray-600">100% secure payment processing</p>
                </div>
                <div class="text-center">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">24/7 Support</h4>
                    <p class="text-gray-600">Dedicated customer support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Featured Products</h2>
                    <p class="text-gray-600 mt-2">Discover our top-rated car audio products</p>
                </div>
                <a href="/shop" class="text-amber-600 hover:text-amber-700 font-semibold inline-flex items-center">
                    View All <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product Cards - Will be dynamic later -->
                @for($i = 1; $i <= 4; $i++)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-lg h-64 bg-gray-200">
                            <div class="absolute inset-0 bg-gray-200 animate-pulse"></div>
                            <div class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                                New
                            </div>
                            <button
                                class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:bg-amber-100 transition">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                        </div>
                        <div class="p-4">
                            <div class="text-sm text-amber-600 font-semibold mb-1">Brand Name</div>
                            <h3 class="font-bold text-lg mb-2 hover:text-amber-600 transition">Product Name {{ $i }}</h3>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-gray-600 text-sm ml-2">(45)</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-800">$299.99</span>
                                <button class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg transition">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Shop by Category</h2>
                <p class="text-gray-600 mt-2">Find the perfect audio solution for your vehicle</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @foreach(['Speakers', 'Subwoofers', 'Amplifiers', 'Head Units', 'Accessories', 'Wiring Kits'] as $category)
                    <a href="/shop?category={{ strtolower($category) }}"
                        class="bg-white rounded-lg shadow-md hover:shadow-lg transition p-6 text-center group">
                        <div class="text-4xl mb-3 text-amber-600 group-hover:scale-110 transition">
                            <i class="fas fa-music"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800">{{ $category }}</h4>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background with gradient and pattern -->
        <div class="absolute inset-0 bg-gradient-to-r from-amber-600 via-amber-700 to-amber-800">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width=" 60"
                height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none" fill-rule="evenodd"
                %3E%3Cg fill="%23ffffff" fill-opacity="0.4" %3E%3Cpath
                d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
                /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <!-- Animated shapes -->
        <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-300 rounded-full mix-blend-overlay opacity-20 animate-pulse">
        </div>
        <div
            class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-400 rounded-full mix-blend-overlay opacity-10 animate-bounce">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-lg rounded-3xl p-12 shadow-2xl border border-white/20">
                <div class="text-center">
                    <div class="inline-block bg-amber-500/30 rounded-full px-6 py-2 mb-6 backdrop-blur-sm">
                        <span class="text-white font-semibold text-sm uppercase tracking-wider">
                            <i class="fas fa-music mr-2"></i> Limited Time Offer
                        </span>
                    </div>

                    <h2 class="text-4xl md:text-6xl font-extrabold text-white mb-4 leading-tight">
                        Ready to <span class="text-yellow-300">Upgrade</span> Your Sound?
                    </h2>

                    <p class="text-xl text-white/90 mb-8 max-w-2xl mx-auto leading-relaxed">
                        Experience the difference premium car audio can make.
                        <span class="font-semibold text-yellow-200">Book a consultation today!</span>
                    </p>

                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                        <a href="/contact"
                            class="group relative inline-flex items-center justify-center px-8 py-4 bg-white text-amber-600 font-bold rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1">
                            <span class="relative z-10 flex items-center">
                                <i class="fas fa-headset mr-2"></i>
                                Contact Us Now
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-amber-100 to-yellow-100 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                        </a>

                        <a href="/shop"
                            class="group inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-amber-600 transition-all duration-300">
                            <i class="fas fa-shopping-bag mr-2"></i>
                            Browse Products
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>

                    <div class="mt-8 flex flex-wrap justify-center gap-6 text-white/80 text-sm">
                        <span><i class="fas fa-check-circle text-yellow-300 mr-1"></i> Free Consultation</span>
                        <span><i class="fas fa-check-circle text-yellow-300 mr-1"></i> Expert Advice</span>
                        <span><i class="fas fa-check-circle text-yellow-300 mr-1"></i> Premium Brands</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-center text-3xl font-bold text-gray-800 mb-12">Trusted Brands</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8 items-center">
                @foreach(['Bose', 'JBL', 'Pioneer', 'Kenwood', 'Sony', 'Alpine'] as $brand)
                    <div class="text-center">
                        <div class="bg-gray-100 rounded-lg p-4 hover:shadow-lg transition">
                            <div class="text-2xl font-bold text-gray-400">{{ $brand }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
