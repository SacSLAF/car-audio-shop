@extends('layouts.app')

@section('title', 'Shop - CarAudio Shop')

@section('content')
<section class="bg-gray-50 py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800">Our Products</h1>
                <p class="text-gray-600 mt-2">Discover our wide range of premium car audio products</p>
            </div>
            <div class="mt-4 md:mt-0 flex items-center space-x-4">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                    <option>Sort by: Newest</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Popularity</option>
                </select>
            </div>
        </div>

        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4">
                <div class="bg-white rounded-lg shadow-lg p-6 sticky top-24">
                    <h3 class="font-bold text-lg mb-4">Filters</h3>

                    <div class="mb-6">
                        <h4 class="font-semibold mb-2">Categories</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Speakers</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Subwoofers</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Amplifiers</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Head Units</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="font-semibold mb-2">Price Range</h4>
                        <div class="flex items-center space-x-2">
                            <input type="number" placeholder="Min" class="w-1/2 px-3 py-2 border rounded-lg">
                            <span>-</span>
                            <input type="number" placeholder="Max" class="w-1/2 px-3 py-2 border rounded-lg">
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="font-semibold mb-2">Brands</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Bose</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>JBL</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="mr-2">
                                <span>Pioneer</span>
                            </label>
                        </div>
                    </div>

                    <button class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 rounded-lg transition">
                        Apply Filters
                    </button>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="lg:w-3/4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @for($i = 1; $i <= 9; $i++)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 group">
                        <div class="relative overflow-hidden rounded-t-lg h-56 bg-gray-200">
                            <div class="absolute inset-0 bg-gray-200 animate-pulse"></div>
                            @if($i % 3 == 0)
                            <div class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                                Sale
                            </div>
                            @elseif($i % 2 == 0)
                            <div class="absolute top-4 left-4 bg-amber-600 text-white text-xs font-bold px-3 py-1 rounded-full">
                                New
                            </div>
                            @endif
                            <button class="absolute top-4 right-4 bg-white rounded-full p-2 shadow-md hover:bg-amber-100 transition">
                                <i class="far fa-heart text-gray-600"></i>
                            </button>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 opacity-0 group-hover:opacity-100 transition">
                                <a href="/product/1" class="block text-center text-white font-semibold">Quick View</a>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="text-sm text-amber-600 font-semibold mb-1">Brand Name</div>
                            <a href="/product/1" class="block">
                                <h3 class="font-bold text-lg hover:text-amber-600 transition">Product Name {{ $i }}</h3>
                            </a>
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
                                <div>
                                    @if($i % 3 == 0)
                                    <span class="text-gray-400 line-through mr-2">$399.99</span>
                                    <span class="text-2xl font-bold text-red-600">$299.99</span>
                                    @else
                                    <span class="text-2xl font-bold text-gray-800">${{ 199.99 + ($i * 50) }}</span>
                                    @endif
                                </div>
                                <button class="bg-amber-600 hover:bg-amber-700 text-white px-4 py-2 rounded-lg transition">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Previous</button>
                        <button class="px-4 py-2 bg-amber-600 text-white rounded-lg">1</button>
                        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">2</button>
                        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">3</button>
                        <button class="px-4 py-2 border rounded-lg hover:bg-gray-50">Next</button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
