@extends('layouts.app')

@section('title', 'Gallery - CarAudio Shop')

@section('content')
    <!-- Hero Section - Identical to Other Pages -->
    <section class="relative bg-gradient-to-r from-amber-600 to-amber-800 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full"
                style="background-image: url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60"
                xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff"
                fill-opacity="0.4"%3E%3Cpath
                d="M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
                /%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl">
                <div class="inline-block bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-6">
                    <span class="text-white font-semibold text-sm tracking-wider">
                        <i class="fas fa-images mr-2"></i> Our Portfolio
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    Our <span class="text-yellow-300">Gallery</span>
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    View our work and installations showcasing quality craftsmanship and attention to detail.
                </p>
            </div>
        </div>
        <!-- Gallery Icon Decoration -->
        <div class="absolute bottom-0 right-0 text-white/5 text-9xl">
            <i class="fas fa-images"></i>
        </div>
    </section>

    <div class="container mx-auto px-4 py-16">
        <!-- Gallery Filters -->
        <div class="flex flex-wrap justify-center gap-3 mb-12">
            <button
                class="px-6 py-2 bg-amber-600 text-white rounded-full font-semibold text-sm hover:bg-amber-700 transition">
                All
            </button>
            <button
                class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-amber-100 hover:text-amber-600 transition">
                Audio Systems
            </button>
            <button
                class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-amber-100 hover:text-amber-600 transition">
                Lighting
            </button>
            <button
                class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-amber-100 hover:text-amber-600 transition">
                Accessories
            </button>
            <button
                class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-amber-100 hover:text-amber-600 transition">
                Camera Systems
            </button>
            <button
                class="px-6 py-2 bg-gray-200 text-gray-700 rounded-full font-semibold text-sm hover:bg-amber-100 hover:text-amber-600 transition">
                Installations
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @for ($i = 1; $i <= 12; $i++)
                <div
                    class="relative group overflow-hidden rounded-xl aspect-square bg-gray-200 shadow-md hover:shadow-2xl transition-all duration-300">
                    <!-- Placeholder Image with Gradient -->
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                        <i class="fas fa-car text-4xl text-gray-500/50"></i>
                    </div>

                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="transform scale-75 group-hover:scale-100 transition-all duration-300">
                                <button
                                    class="bg-white/20 backdrop-blur-sm text-white p-4 rounded-full hover:bg-white/30 transition">
                                    <i class="fas fa-search-plus text-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                            <p class="text-white font-bold text-lg">Audio Installation {{ $i }}</p>
                            <p class="text-gray-300 text-sm flex items-center">
                                <i class="fas fa-tag mr-2"></i>
                                <span>Professional Install</span>
                            </p>
                        </div>
                    </div>

                    <!-- Category Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                            @if ($i <= 3)
                                Audio
                            @elseif($i <= 6)
                                Lighting
                            @elseif($i <= 9)
                                Accessories
                            @else
                                Camera
                            @endif
                        </span>
                    </div>

                    <!-- Favorite Button -->
                    <button
                        class="absolute top-3 right-3 bg-white/80 backdrop-blur-sm text-gray-600 w-8 h-8 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all duration-300">
                        <i class="far fa-heart text-sm"></i>
                    </button>
                </div>
            @endfor
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button
                class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white font-bold rounded-lg transition shadow-lg hover:shadow-xl inline-flex items-center">
                <i class="fas fa-sync-alt mr-2"></i>
                Load More
            </button>
        </div>

        <!-- Video Gallery Section -->
        <div class="mt-20">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">
                        <i class="fas fa-video text-amber-600 mr-3"></i>
                        Video Gallery
                    </h2>
                    <p class="text-gray-600 mt-1">Watch our installations and services in action</p>
                </div>
                <a href="#" class="text-amber-600 hover:text-amber-700 font-semibold inline-flex items-center">
                    View All Videos <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @for ($i = 1; $i <= 3; $i++)
                    <div
                        class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                        <div
                            class="relative aspect-video bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
                            <!-- Play Button Overlay -->
                            <div
                                class="absolute inset-0 bg-black/30 group-hover:bg-black/40 transition flex items-center justify-center">
                                <div
                                    class="w-16 h-16 bg-amber-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-all duration-300 shadow-lg">
                                    <i class="fas fa-play text-white text-xl ml-1"></i>
                                </div>
                            </div>
                            <!-- Video Thumbnail Icon -->
                            <i class="fas fa-film text-4xl text-gray-600"></i>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4">
                                <p class="text-white font-semibold text-sm">Installation Demo {{ $i }}</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <h4 class="font-bold text-gray-800">Professional Audio Setup {{ $i }}</h4>
                            <p class="text-gray-600 text-sm mt-1">See how we transform vehicles with premium audio systems
                            </p>
                            <div class="flex items-center justify-between mt-3">
                                <span class="text-xs text-gray-500">
                                    <i class="far fa-clock mr-1"></i> 2:30 min
                                </span>
                                <span class="text-xs text-amber-600 font-semibold">
                                    <i class="fas fa-eye mr-1"></i> 1.2K views
                                </span>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <!-- Stats Section -->
        <div class="mt-20 bg-gradient-to-r from-amber-600 to-amber-800 rounded-2xl p-8 md:p-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-white">
                <div>
                    <div class="text-4xl font-extrabold mb-2">500+</div>
                    <p class="text-amber-200">Projects Completed</p>
                </div>
                <div>
                    <div class="text-4xl font-extrabold mb-2">1000+</div>
                    <p class="text-amber-200">Happy Customers</p>
                </div>
                <div>
                    <div class="text-4xl font-extrabold mb-2">50+</div>
                    <p class="text-amber-200">Vehicle Types</p>
                </div>
                <div>
                    <div class="text-4xl font-extrabold mb-2">4.9★</div>
                    <p class="text-amber-200">Average Rating</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 bg-white rounded-2xl shadow-xl p-8 md:p-12 text-center border border-gray-100">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Ready to Transform Your Vehicle?</h3>
            <p class="text-gray-600 max-w-2xl mx-auto mb-8">
                Contact us today to discuss your requirements and get a free quote for your vehicle.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/contact"
                    class="inline-flex items-center justify-center bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg font-bold transition shadow-lg hover:shadow-xl">
                    <i class="fas fa-calendar-check mr-2"></i>
                    Book a Consultation
                </a>
                <a href="/services"
                    class="inline-flex items-center justify-center border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white px-8 py-3 rounded-lg font-bold transition">
                    <i class="fas fa-wrench mr-2"></i>
                    View Services
                </a>
            </div>
        </div>
    </div>
@endsection
