@extends('layouts.app')

@section('title', 'Premium Car Audio & Accessories - CarAudio Shop')

@section('content')
    <!-- Hero Section with Slider -->
    <section id="heroSlider" class="relative h-[600px] md:h-[700px] overflow-hidden">
        <!-- Slider Container -->
        <div class="relative w-full h-full">
            <!-- Slide 1 -->
            <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-100" data-slide="0">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('https://images.unsplash.com/photo-1592570714618-15e2d4719c6c?q=80&w=1173&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl text-white">
                            <span
                                class="inline-block bg-amber-500/30 backdrop-blur-sm text-white px-4 py-1 rounded-full text-sm font-semibold mb-4 tracking-wider">
                                <i class="fas fa-music mr-2"></i> Premium Sound Experience
                            </span>
                            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">
                                Upgrade Your Ride with
                                <span class="text-yellow-300">Premium Car Audio</span>
                            </h1>
                            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-2xl">
                                Experience crystal clear sound quality with our top-of-the-line car audio systems, speakers,
                                and accessories.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/shop"
                                    class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                                    <i class="fas fa-shopping-bag mr-2"></i> Shop Now
                                </a>
                                <a href="/about"
                                    class="bg-white/20 backdrop-blur-sm hover:bg-white hover:text-amber-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center border border-white/30">
                                    <i class="fas fa-play-circle mr-2"></i> Learn More
                                </a>
                            </div>
                            <div class="mt-12 flex flex-wrap gap-8">
                                <div>
                                    <p class="text-3xl font-bold text-yellow-300">{{ $totalCustomers ?? '1000+' }}</p>
                                    <p class="text-gray-200">Happy Customers</p>
                                </div>
                                <div>
                                    <p class="text-3xl font-bold text-yellow-300">{{ $totalProducts }}</p>
                                    <p class="text-gray-200">Products</p>
                                </div>
                                <div>
                                    <p class="text-3xl font-bold text-yellow-300">{{ $totalBrands }}</p>
                                    <p class="text-gray-200">Top Brands</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0" data-slide="1">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('https://www.caraudiocenter.se/cdn/shop/files/Hero_CAC_2542b115-849b-4595-bf8b-1f07cd09af4c.jpg?v=1739972031&width=3840');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl text-white">
                            <span
                                class="inline-block bg-amber-500/30 backdrop-blur-sm text-white px-4 py-1 rounded-full text-sm font-semibold mb-4 tracking-wider">
                                <i class="fas fa-bolt mr-2"></i> Premium Quality
                            </span>
                            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">
                                Professional <span class="text-yellow-300">Installation</span> Services
                            </h1>
                            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-2xl">
                                From audio systems to lighting and cameras, our certified technicians ensure flawless
                                installation for optimal performance.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/services"
                                    class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                                    <i class="fas fa-tools mr-2"></i> Our Services
                                </a>
                                <a href="/contact"
                                    class="bg-white/20 backdrop-blur-sm hover:bg-white hover:text-amber-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center border border-white/30">
                                    <i class="fas fa-calendar-check mr-2"></i> Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slide absolute inset-0 transition-opacity duration-1000 opacity-0" data-slide="2">
                <div class="absolute inset-0 bg-cover bg-center"
                    style="background-image: url('https://cdn.mos.cms.futurecdn.net/DEvoNmrS8wXr4JvrhQrmKj.jpg');">
                </div>
                <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/40 to-transparent"></div>
                <div class="absolute inset-0 flex items-center">
                    <div class="container mx-auto px-4">
                        <div class="max-w-3xl text-white">
                            <span
                                class="inline-block bg-amber-500/30 backdrop-blur-sm text-white px-4 py-1 rounded-full text-sm font-semibold mb-4 tracking-wider">
                                <i class="fas fa-gem mr-2"></i> Top Brands
                            </span>
                            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">
                                Trusted <span class="text-yellow-300">Premium Brands</span>
                            </h1>
                            <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-2xl">
                                We stock products from the most trusted brands including Bose, JBL, Pioneer, Kenwood, Sony,
                                and Alpine.
                            </p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="/shop"
                                    class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                                    <i class="fas fa-store mr-2"></i> Browse Shop
                                </a>
                                <a href="/gallery"
                                    class="bg-white/20 backdrop-blur-sm hover:bg-white hover:text-amber-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition duration-300 inline-flex items-center justify-center border border-white/30">
                                    <i class="fas fa-images mr-2"></i> View Gallery
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <button id="prevSlide"
            class="absolute left-4 top-1/2 -translate-y-1/2 z-20 bg-white/20 backdrop-blur-sm text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110 border border-white/20">
            <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button id="nextSlide"
            class="absolute right-4 top-1/2 -translate-y-1/2 z-20 bg-white/20 backdrop-blur-sm text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-white/30 transition-all duration-300 hover:scale-110 border border-white/20">
            <i class="fas fa-chevron-right text-xl"></i>
        </button>

        <!-- Slide Indicators -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-3">
            <button class="slide-indicator w-8 h-3 rounded-full bg-white transition-all duration-300"
                data-index="0"></button>
            <button class="slide-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                data-index="1"></button>
            <button class="slide-indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                data-index="2"></button>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                        <i class="fas fa-truck text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Free Shipping</h4>
                    <p class="text-gray-600">Free delivery on orders over $100</p>
                </div>
                <div class="text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                        <i class="fas fa-undo-alt text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Easy Returns</h4>
                    <p class="text-gray-600">30-day return policy</p>
                </div>
                <div class="text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
                        <i class="fas fa-shield-alt text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-lg mb-2">Secure Payment</h4>
                    <p class="text-gray-600">100% secure payment processing</p>
                </div>
                <div class="text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition duration-300">
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
                <a href="/shop"
                    class="text-amber-600 hover:text-amber-700 font-semibold inline-flex items-center group">
                    View All <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($featuredProducts as $product)
                    <div
                        class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                        <div class="relative overflow-hidden h-64 bg-gray-200">
                            @if ($product->main_image)
                                <img src="{{ Storage::url($product->main_image) }}" alt="{{ $product->name }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                            @else
                                <div
                                    class="absolute inset-0 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                    <i class="fas fa-car text-4xl text-gray-400/50"></i>
                                </div>
                            @endif

                            @if ($product->compare_price)
                                <div
                                    class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    <i class="fas fa-tag mr-1"></i> {{ $product->getDiscountPercentage() }}% OFF
                                </div>
                            @else
                                <div
                                    class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                    <i class="fas fa-star mr-1"></i> Featured
                                </div>
                            @endif

                            <button
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-gray-600 w-9 h-9 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition shadow-md">
                                <i class="far fa-heart"></i>
                            </button>

                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/60 to-transparent p-4 opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <a href="{{ route('product.show', $product) }}"
                                    class="block text-center text-white font-semibold bg-amber-600/90 hover:bg-amber-600 py-2 rounded-lg transition backdrop-blur-sm">
                                    <i class="fas fa-eye mr-2"></i> Quick View
                                </a>
                            </div>
                        </div>

                        <div class="p-4">
                            <div class="text-xs text-amber-600 font-semibold mb-1">
                                <i class="fas fa-tag mr-1"></i> {{ $product->brand->name ?? 'Brand' }}
                            </div>
                            <a href="{{ route('product.show', $product) }}" class="block">
                                <h3 class="font-bold text-lg hover:text-amber-600 transition line-clamp-1">
                                    {{ $product->name }}</h3>
                            </a>
                            <div class="flex items-center mb-2">
                                <div class="flex text-yellow-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span class="text-gray-600 text-xs ml-2">(45)</span>
                                @if ($product->in_stock)
                                    <span class="text-xs text-green-600 ml-2">
                                        <i class="fas fa-check-circle"></i> In Stock
                                    </span>
                                @endif
                            </div>
                            <div class="flex items-center justify-between">
                                <div>
                                    @if ($product->compare_price)
                                        <span
                                            class="text-gray-400 line-through text-sm mr-2">${{ number_format($product->compare_price, 2) }}</span>
                                        <span
                                            class="text-2xl font-bold text-red-600">${{ number_format($product->price, 2) }}</span>
                                    @else
                                        <span
                                            class="text-2xl font-bold text-gray-800">${{ number_format($product->price, 2) }}</span>
                                    @endif
                                </div>
                                <button
                                    class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg transition transform hover:scale-105 shadow-md hover:shadow-lg">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-12">
                        <i class="fas fa-box-open text-6xl text-gray-300 mb-4"></i>
                        <h3 class="text-2xl font-bold text-gray-600">No featured products</h3>
                        <p class="text-gray-500">Check back soon for our featured products.</p>
                    </div>
                @endforelse
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
                @forelse($categories as $category)
                    <a href="{{ route('category.show', $category->slug) }}"
                        class="bg-white rounded-xl shadow-md hover:shadow-xl transition-all duration-300 p-6 text-center group hover:-translate-y-1">
                        <div class="text-4xl mb-3 text-amber-600 group-hover:scale-110 transition-transform duration-300">
                            <i class="fas fa-music"></i>
                        </div>
                        <h4 class="font-semibold text-gray-800 group-hover:text-amber-600 transition">
                            {{ $category->name }}</h4>
                        <span class="text-xs text-gray-400">{{ $category->products_count ?? 0 }} products</span>
                    </a>
                @empty
                    <div class="col-span-6 text-center py-12">
                        <p class="text-gray-500">No categories available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 relative overflow-hidden">
        <!-- Background with gradient and pattern -->
        <div class="absolute inset-0 bg-gradient-to-r from-amber-600 via-amber-700 to-amber-800">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml,%3Csvg width="60"
                height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none"
                fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.4"%3E%3Cpath
                d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
                /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>

        <!-- Animated shapes -->
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-yellow-300 rounded-full mix-blend-overlay opacity-20 animate-pulse">
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
                @forelse($brands as $brand)
                    <a href="{{ route('brand.show', $brand->slug) }}" class="text-center group">
                        <div
                            class="bg-gray-100 rounded-xl p-4 hover:shadow-xl transition-all duration-300 group-hover:bg-amber-50 group-hover:-translate-y-1">
                            <div class="text-2xl font-bold text-gray-400 group-hover:text-amber-600 transition">
                                {{ $brand->name }}</div>
                            <span
                                class="text-xs text-gray-400 group-hover:text-amber-500">{{ $brand->products_count ?? 0 }}
                                products</span>
                        </div>
                    </a>
                @empty
                    <div class="col-span-6 text-center py-12">
                        <p class="text-gray-500">No brands available.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slides = document.querySelectorAll('.slide');
                const indicators = document.querySelectorAll('.slide-indicator');
                const prevBtn = document.getElementById('prevSlide');
                const nextBtn = document.getElementById('nextSlide');
                let currentSlide = 0;
                let slideInterval;

                function showSlide(index) {
                    slides.forEach((slide, i) => {
                        slide.classList.remove('opacity-100', 'opacity-0');
                        if (i === index) {
                            slide.classList.add('opacity-100');
                        } else {
                            slide.classList.add('opacity-0');
                        }
                    });

                    indicators.forEach((indicator, i) => {
                        indicator.classList.remove('bg-white', 'w-8');
                        indicator.classList.add('bg-white/50', 'w-3');
                        if (i === index) {
                            indicator.classList.remove('bg-white/50', 'w-3');
                            indicator.classList.add('bg-white', 'w-8');
                        }
                    });

                    currentSlide = index;
                }

                function nextSlide() {
                    const next = (currentSlide + 1) % slides.length;
                    showSlide(next);
                }

                function prevSlide() {
                    const prev = (currentSlide - 1 + slides.length) % slides.length;
                    showSlide(prev);
                }

                function startAutoSlide() {
                    slideInterval = setInterval(nextSlide, 3000);
                }

                function stopAutoSlide() {
                    clearInterval(slideInterval);
                }

                prevBtn.addEventListener('click', () => {
                    stopAutoSlide();
                    prevSlide();
                    startAutoSlide();
                });

                nextBtn.addEventListener('click', () => {
                    stopAutoSlide();
                    nextSlide();
                    startAutoSlide();
                });

                indicators.forEach((indicator) => {
                    indicator.addEventListener('click', function() {
                        stopAutoSlide();
                        const index = parseInt(this.dataset.index);
                        showSlide(index);
                        startAutoSlide();
                    });
                });

                const heroSection = document.getElementById('heroSlider');
                heroSection.addEventListener('mouseenter', stopAutoSlide);
                heroSection.addEventListener('mouseleave', startAutoSlide);

                showSlide(0);
                startAutoSlide();
            });
        </script>
    @endpush
@endsection
