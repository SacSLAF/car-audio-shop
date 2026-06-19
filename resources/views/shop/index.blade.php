@extends('layouts.app')

@section('title', 'Shop - CarAudio Shop')

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
                        <i class="fas fa-store mr-2"></i> Our Shop
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    Premium <span class="text-yellow-300">Car Audio</span> Products
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    Discover our wide range of premium car audio systems, speakers, subwoofers, and accessories from top
                    brands.
                </p>
            </div>
        </div>
        <!-- Shop Icon Decoration -->
        <div class="absolute bottom-0 right-0 text-white/5 text-9xl">
            <i class="fas fa-shopping-bag"></i>
        </div>
    </section>

    <section class="bg-gray-50 py-8">
        <div class="container mx-auto px-4">
            <!-- Breadcrumb -->
            <nav class="flex mb-6 text-sm">
                <a href="/" class="text-gray-500 hover:text-amber-600">Home</a>
                <span class="mx-2 text-gray-400">/</span>
                <span class="text-gray-800 font-semibold">Shop</span>
            </nav>

            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">All Products</h2>
                    <p class="text-gray-600 text-sm mt-1">
                        Showing {{ $products->firstItem() ?? 0 }}-{{ $products->lastItem() ?? 0 }} of
                        {{ $products->total() }} products
                    </p>
                </div>
                <div class="mt-4 md:mt-0 flex flex-wrap items-center gap-3">
                    <span class="text-sm text-gray-600">Sort by:</span>
                    <form action="{{ route('shop') }}" method="GET" class="flex items-center gap-2">
                        <select name="sort" onchange="this.form.submit()"
                            class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 bg-white">
                            <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Newest</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to
                                High</option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High
                                to Low</option>
                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name: A to Z
                            </option>
                            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name: Z to A
                            </option>
                        </select>

                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('brand'))
                            <input type="hidden" name="brand" value="{{ request('brand') }}">
                        @endif
                        @if (request('search'))
                            <input type="hidden" name="search" value="{{ request('search') }}">
                        @endif
                    </form>

                    <div class="flex border border-gray-300 rounded-lg overflow-hidden">
                        <button class="px-3 py-2 bg-amber-600 text-white hover:bg-amber-700 transition">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="px-3 py-2 bg-white text-gray-600 hover:bg-gray-50 transition">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filters -->
                <div class="lg:w-1/4">
                    <div class="bg-white rounded-xl shadow-lg p-6 sticky top-24 border border-gray-100">
                        <div class="flex items-center justify-between mb-6">
                            <h3 class="font-bold text-lg text-gray-800">
                                <i class="fas fa-sliders-h text-amber-600 mr-2"></i>
                                Filters
                            </h3>
                            <a href="{{ route('shop') }}"
                                class="text-sm text-amber-600 hover:text-amber-700 font-semibold">Clear All</a>
                        </div>

                        <!-- Search Filter -->
                        <form action="{{ route('shop') }}" method="GET" class="mb-6">
                            <div class="relative">
                                <input type="text" name="search" placeholder="Search products..."
                                    value="{{ request('search') }}"
                                    class="w-full px-4 py-2 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if (request('brand'))
                                <input type="hidden" name="brand" value="{{ request('brand') }}">
                            @endif
                            @if (request('sort'))
                                <input type="hidden" name="sort" value="{{ request('sort') }}">
                            @endif
                        </form>

                        <!-- Categories Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold mb-3 text-gray-800">Categories</h4>
                            <div class="space-y-2">
                                @foreach ($categories as $category)
                                    <a href="{{ route('shop', array_merge(request()->query(), ['category' => $category->slug])) }}"
                                        class="flex items-center cursor-pointer hover:text-amber-600 transition {{ request('category') == $category->slug ? 'text-amber-600' : 'text-gray-700' }}">
                                        <span class="flex-1">{{ $category->name }}</span>
                                        <span class="text-xs text-gray-400">({{ $category->products_count ?? 0 }})</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <!-- Brands Filter -->
                        <div class="mb-6">
                            <h4 class="font-semibold mb-3 text-gray-800">Brands</h4>
                            <div class="space-y-2">
                                @foreach ($brands as $brand)
                                    <a href="{{ route('shop', array_merge(request()->query(), ['brand' => $brand->slug])) }}"
                                        class="flex items-center cursor-pointer hover:text-amber-600 transition {{ request('brand') == $brand->slug ? 'text-amber-600' : 'text-gray-700' }}">
                                        <span class="flex-1">{{ $brand->name }}</span>
                                        <span class="text-xs text-gray-400">({{ $brand->products_count ?? 0 }})</span>
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <button onclick="window.location.href='{{ route('shop') }}'"
                            class="w-full bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white font-bold py-3 rounded-lg transition shadow-md hover:shadow-lg">
                            <i class="fas fa-sync-alt mr-2"></i>
                            Reset Filters
                        </button>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="lg:w-3/4">
                    @if ($products->count() > 0)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach ($products as $product)
                                <div
                                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 group overflow-hidden">
                                    <div class="relative overflow-hidden h-56 bg-gray-200">
                                        @if ($product->main_image)
                                            <img src="{{ Storage::url($product->main_image) }}"
                                                alt="{{ $product->name }}"
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
                                                <i class="fas fa-tag mr-1"></i> {{ $product->getDiscountPercentage() }}%
                                                OFF
                                            </div>
                                        @elseif($product->is_featured)
                                            <div
                                                class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                                <i class="fas fa-star mr-1"></i> Featured
                                            </div>
                                        @elseif($product->created_at->diffInDays(now()) <= 7)
                                            <div
                                                class="absolute top-4 left-4 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                                                <i class="fas fa-clock mr-1"></i> New
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
                                            <span class="text-gray-600 text-xs ml-2">({{ rand(10, 100) }})</span>
                                            @if ($product->in_stock)
                                                <span class="text-xs text-green-600 ml-2">
                                                    <i class="fas fa-check-circle"></i> In Stock
                                                </span>
                                            @else
                                                <span class="text-xs text-red-600 ml-2">
                                                    <i class="fas fa-times-circle"></i> Out of Stock
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
                            @endforeach
                        </div>

                        <!-- Pagination -->
                        <div class="mt-8">
                            {{ $products->withQueryString()->links() }}
                        </div>
                    @else
                        <div class="text-center py-12 bg-white rounded-xl shadow-lg">
                            <i class="fas fa-box-open text-6xl text-gray-300 mb-4"></i>
                            <h3 class="text-2xl font-bold text-gray-600">No products found</h3>
                            <p class="text-gray-500 mt-2">Try adjusting your filters or search terms.</p>
                            <a href="{{ route('shop') }}"
                                class="inline-block mt-4 bg-amber-600 hover:bg-amber-700 text-white px-6 py-2 rounded-lg transition">
                                Clear Filters
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
