@extends('layouts.app')

@section('title', 'Gallery - CarAudio Shop')
@push('styles')
    <style>
        /* Lightbox animations */
        #lightbox {
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Image smooth transition */
        #lightboxImage {
            transition: opacity 0.3s ease;
        }

        #lightboxImage.loaded {
            opacity: 1;
        }

        /* Custom scrollbar for thumbnails */
        .scrollbar-hide::-webkit-scrollbar {
            height: 4px;
        }

        .scrollbar-hide::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
        }

        .scrollbar-hide::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
        }

        .scrollbar-hide::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Thumbnail styles */
        .thumbnail-item {
            transition: all 0.3s ease;
            border: 2px solid transparent;
            opacity: 0.5;
            cursor: pointer;
        }

        .thumbnail-item:hover {
            opacity: 0.8;
            transform: scale(1.05);
        }

        .thumbnail-item.active {
            border-color: #f59e0b;
            opacity: 1;
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.3);
        }

        /* Counter badge pulse */
        #lightboxCounter {
            transition: all 0.3s ease;
        }

        #lightboxCounter.pulse {
            animation: counterPulse 0.3s ease;
        }

        @keyframes counterPulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            #lightboxImage {
                max-height: 50vh;
            }

            .thumbnail-item {
                width: 50px !important;
                height: 50px !important;
            }
        }
    </style>
@endpush
@section('content')
    <!-- Hero Section - Identical to Other Pages -->
    <section class="relative bg-gradient-to-r from-amber-600 to-amber-800 text-white py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" style="background-image: url('data:image/svg+xml,%3Csvg width="
                60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg" %3E%3Cg fill="none"
                fill-rule="evenodd" %3E%3Cg fill="%23ffffff" fill-opacity="0.4" %3E%3Cpath
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
            <a href="{{ route('gallery', ['category' => 'all']) }}"
                class="px-6 py-2 {{ request('category') == 'all' || !request('category') ? 'bg-amber-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-amber-100 hover:text-amber-600' }} rounded-full font-semibold text-sm transition">
                All
            </a>
            <a href="{{ route('gallery', ['category' => 'audio']) }}"
                class="px-6 py-2 {{ request('category') == 'audio' ? 'bg-amber-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-amber-100 hover:text-amber-600' }} rounded-full font-semibold text-sm transition">
                Audio Systems
            </a>
            <a href="{{ route('gallery', ['category' => 'lighting']) }}"
                class="px-6 py-2 {{ request('category') == 'lighting' ? 'bg-amber-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-amber-100 hover:text-amber-600' }} rounded-full font-semibold text-sm transition">
                Lighting
            </a>
            <a href="{{ route('gallery', ['category' => 'accessories']) }}"
                class="px-6 py-2 {{ request('category') == 'accessories' ? 'bg-amber-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-amber-100 hover:text-amber-600' }} rounded-full font-semibold text-sm transition">
                Accessories
            </a>
            <a href="{{ route('gallery', ['category' => 'camera']) }}"
                class="px-6 py-2 {{ request('category') == 'camera' ? 'bg-amber-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-amber-100 hover:text-amber-600' }} rounded-full font-semibold text-sm transition">
                Camera Systems
            </a>
            <a href="{{ route('gallery', ['category' => 'installation']) }}"
                class="px-6 py-2 {{ request('category') == 'installation' ? 'bg-amber-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-amber-100 hover:text-amber-600' }} rounded-full font-semibold text-sm transition">
                Installations
            </a>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse($galleryItems as $item)
                <div class="relative group overflow-hidden rounded-xl aspect-square shadow-md hover:shadow-2xl transition-all duration-300 gallery-item"
                    data-image="{{ $item->image ? Storage::url($item->image) : '' }}" data-title="{{ $item->title }}"
                    data-description="{{ $item->description }}">
                    @if($item->type == 'video')
                        <!-- Video Thumbnail -->
                        <div class="absolute inset-0 bg-gradient-to-br from-gray-800 to-gray-900 flex items-center justify-center">
                            <div class="relative w-full h-full">
                                @if($item->image)
                                    <div class="absolute inset-0 bg-cover bg-center opacity-50"
                                        style="background-image: url('{{ Storage::url($item->image) }}')">
                                    </div>
                                @endif
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <i
                                        class="fas fa-play-circle text-6xl text-white/80 hover:text-amber-400 transition group-hover:scale-110"></i>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Image -->
                        @if($item->image && Storage::disk('public')->exists($item->image))
                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                            <div class="absolute inset-0 bg-gradient-to-br from-gray-300 to-gray-400 flex items-center justify-center">
                                <i class="fas fa-car text-4xl text-gray-500/50"></i>
                            </div>
                        @endif
                    @endif

                    <!-- Hover Overlay -->
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="transform scale-75 group-hover:scale-100 transition-all duration-300">
                                <button
                                    onclick="openLightbox('{{ $item->image ? Storage::url($item->image) : '' }}', '{{ $item->title }}', '{{ $item->description }}')"
                                    class="bg-white/20 backdrop-blur-sm text-white p-4 rounded-full hover:bg-white/30 transition">
                                    <i class="fas fa-{{ $item->type == 'video' ? 'play' : 'search-plus' }} text-2xl"></i>
                                </button>
                            </div>
                        </div>
                        <div
                            class="absolute bottom-0 left-0 right-0 p-4 translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                            <p class="text-white font-bold text-lg">{{ $item->title }}</p>
                            <p class="text-gray-300 text-sm flex items-center">
                                <i class="fas fa-tag mr-2"></i>
                                <span>{{ ucfirst($item->category) }}</span>
                                @if($item->views > 0)
                                    <span class="ml-3"><i class="fas fa-eye mr-1"></i> {{ $item->views }}</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <!-- Category Badge -->
                    <div class="absolute top-3 left-3">
                        <span class="bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                            {{ ucfirst($item->category) }}
                        </span>
                        @if($item->type == 'video')
                            <span class="ml-1 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                <i class="fas fa-play mr-1"></i> Video
                            </span>
                        @endif
                    </div>

                    <!-- Favorite Button -->
                    <button
                        class="absolute top-3 right-3 bg-white/80 backdrop-blur-sm text-gray-600 w-8 h-8 rounded-full flex items-center justify-center hover:bg-amber-600 hover:text-white transition-all duration-300">
                        <i class="far fa-heart text-sm"></i>
                    </button>
                </div>
            @empty
                <div class="col-span-4 text-center py-12">
                    <i class="fas fa-images text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-600">No gallery items found</h3>
                    <p class="text-gray-500">Check back soon for new content.</p>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $galleryItems->withQueryString()->links() }}
        </div>

        <!-- Load More Button (Alternative to pagination) -->
        @if($galleryItems->hasMorePages())
            <div class="text-center mt-8">
                <a href="{{ $galleryItems->nextPageUrl() }}"
                    class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white font-bold rounded-lg transition shadow-lg hover:shadow-xl inline-flex items-center">
                    <i class="fas fa-sync-alt mr-2"></i>
                    Load More
                </a>
            </div>
        @endif

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
                    <div class="text-4xl font-extrabold mb-2">{{ $galleryItems->total() }}+</div>
                    <p class="text-amber-200">Gallery Items</p>
                </div>
                <div>
                    <div class="text-4xl font-extrabold mb-2">{{ $featuredItems }}+</div>
                    <p class="text-amber-200">Featured Works</p>
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
    <!-- Lightbox Modal -->
    <div id="lightbox" class="fixed inset-0 z-50 hidden">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/90 backdrop-blur-sm"></div>

        <!-- Close Button - Top Right -->
        <button onclick="closeLightbox()"
            class="absolute top-6 right-6 z-10 text-white/80 hover:text-white hover:scale-110 transition-all duration-300 text-4xl">
            <i class="fas fa-times"></i>
        </button>

        <!-- Navigation Arrows -->
        <button onclick="prevImage()"
            class="absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-10 text-white/50 hover:text-white transition-all duration-300 text-3xl hover:scale-110">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button onclick="nextImage()"
            class="absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-10 text-white/50 hover:text-white transition-all duration-300 text-3xl hover:scale-110">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Image Container -->
        <div class="flex items-center justify-center w-full h-full p-4 md:p-8">
            <div class="relative max-w-6xl w-full max-h-[85vh] flex items-center justify-center">
                <img id="lightboxImage" src="" alt="" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl">
            </div>
        </div>

        <!-- Image Counter (Optional - Bottom Center) -->
        <div id="lightboxCounter"
            class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white/50 text-sm font-medium bg-black/50 px-4 py-2 rounded-full backdrop-blur-sm">
            1 / 1
        </div>
    </div>

    @push('scripts')
        <script>
            let galleryData = [];
            let currentIndex = 0;

            // Initialize gallery data
            document.addEventListener('DOMContentLoaded', function () {
                const items = document.querySelectorAll('.gallery-item');
                items.forEach((item) => {
                    const image = item.dataset.image;
                    const title = item.dataset.title;
                    if (image) {
                        galleryData.push({ image, title });
                    }
                });
            });

            // Open Lightbox
            function openLightbox(image, title) {
                if (!image) return;

                const index = galleryData.findIndex(item => item.image === image);
                if (index !== -1) {
                    currentIndex = index;
                }

                const lightbox = document.getElementById('lightbox');
                lightbox.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                updateLightbox(currentIndex);
            }

            // Close Lightbox
            function closeLightbox() {
                document.getElementById('lightbox').classList.add('hidden');
                document.body.style.overflow = 'auto';
            }

            // Update Lightbox Content
            function updateLightbox(index) {
                const data = galleryData[index];
                if (!data) return;

                const img = document.getElementById('lightboxImage');
                const counter = document.getElementById('lightboxCounter');

                img.src = data.image;
                img.alt = data.title || 'Gallery Image';

                if (counter && galleryData.length > 1) {
                    counter.textContent = `${index + 1} / ${galleryData.length}`;
                } else if (counter) {
                    counter.textContent = '';
                }
            }

            // Next Image
            function nextImage() {
                if (galleryData.length === 0) return;
                currentIndex = (currentIndex + 1) % galleryData.length;
                updateLightbox(currentIndex);
            }

            // Previous Image
            function prevImage() {
                if (galleryData.length === 0) return;
                currentIndex = (currentIndex - 1 + galleryData.length) % galleryData.length;
                updateLightbox(currentIndex);
            }

            // Keyboard Navigation
            document.addEventListener('keydown', function (e) {
                const lightbox = document.getElementById('lightbox');
                if (!lightbox.classList.contains('hidden')) {
                    if (e.key === 'Escape') closeLightbox();
                    if (e.key === 'ArrowRight') nextImage();
                    if (e.key === 'ArrowLeft') prevImage();
                }
            });

            // Close on click outside
            document.getElementById('lightbox').addEventListener('click', function (e) {
                if (e.target === this) closeLightbox();
            });
        </script>
    @endpush
@endsection
