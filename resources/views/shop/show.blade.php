@extends('layouts.app')

@section('title', 'Product Name - CarAudio Shop')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <!-- Breadcrumb -->
        <nav class="flex mb-8 text-sm">
            <a href="/" class="text-gray-500 hover:text-amber-600">Home</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="/shop" class="text-gray-500 hover:text-amber-600">Shop</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-800 font-semibold">Product Name</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Images -->
            <div>
                <div class="bg-gray-100 rounded-lg h-96 flex items-center justify-center mb-4">
                    <i class="fas fa-image text-6xl text-gray-300"></i>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    @for($i = 1; $i <= 4; $i++)
                    <div class="bg-gray-100 rounded-lg h-24 flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-amber-600 transition">
                        <i class="fas fa-image text-2xl text-gray-300"></i>
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <div class="mb-2">
                    <span class="text-amber-600 font-semibold">Brand Name</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Product Name</h1>

                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-600 ml-2">(45 Reviews)</span>
                </div>

                <div class="mb-6">
                    <span class="text-3xl font-bold text-gray-800">$299.99</span>
                    <span class="text-gray-400 line-through ml-2">$399.99</span>
                    <span class="ml-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">Save 25%</span>
                </div>

                <div class="mb-6">
                    <div class="flex items-center mb-2">
                        <span class="text-green-600 font-semibold"><i class="fas fa-check-circle mr-1"></i> In Stock</span>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

                <!-- Options -->
                <div class="mb-6">
                    <h4 class="font-semibold mb-2">Color</h4>
                    <div class="flex space-x-2">
                        <button class="w-8 h-8 rounded-full bg-black border-2 border-amber-600"></button>
                        <button class="w-8 h-8 rounded-full bg-gray-600 border-2 border-transparent hover:border-amber-600"></button>
                        <button class="w-8 h-8 rounded-full bg-red-600 border-2 border-transparent hover:border-amber-600"></button>
                    </div>
                </div>

                <div class="mb-6">
                    <h4 class="font-semibold mb-2">Quantity</h4>
                    <div class="flex items-center space-x-4">
                        <button class="w-10 h-10 border rounded-lg hover:bg-gray-50">-</button>
                        <span class="text-xl font-bold w-12 text-center">1</span>
                        <button class="w-10 h-10 border rounded-lg hover:bg-gray-50">+</button>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="flex-1 bg-amber-600 hover:bg-amber-700 text-white font-bold py-4 px-6 rounded-lg transition">
                        <i class="fas fa-cart-plus mr-2"></i> Add to Cart
                    </button>
                    <button class="flex-1 bg-gray-800 hover:bg-gray-900 text-white font-bold py-4 px-6 rounded-lg transition">
                        <i class="fas fa-bolt mr-2"></i> Buy Now
                    </button>
                </div>

                <div class="mt-6 flex flex-wrap gap-4 text-sm text-gray-600">
                    <span><i class="fas fa-truck text-amber-600 mr-1"></i> Free Shipping</span>
                    <span><i class="fas fa-undo text-amber-600 mr-1"></i> 30-Day Returns</span>
                    <span><i class="fas fa-shield-alt text-amber-600 mr-1"></i> Secure Checkout</span>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-16">
            <div class="border-b border-gray-200">
                <nav class="flex space-x-8">
                    <button class="py-4 px-1 border-b-2 border-amber-600 text-amber-600 font-semibold">
                        Description
                    </button>
                    <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                        Specifications
                    </button>
                    <button class="py-4 px-1 border-b-2 border-transparent text-gray-500 hover:text-gray-700">
                        Reviews (45)
                    </button>
                </nav>
            </div>
            <div class="py-8">
                <h3 class="text-xl font-bold mb-4">Product Description</h3>
                <p class="text-gray-600 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>

        <!-- Related Products -->
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Related Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @for($i = 1; $i <= 4; $i++)
                <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition">
                    <div class="h-48 bg-gray-200 rounded-t-lg"></div>
                    <div class="p-4">
                        <h3 class="font-bold hover:text-amber-600 transition">Product Name {{ $i }}</h3>
                        <div class="flex items-center justify-between mt-2">
                            <span class="font-bold text-gray-800">$199.99</span>
                            <button class="bg-amber-600 text-white px-3 py-1 rounded-lg hover:bg-amber-700 transition text-sm">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
@endsection
