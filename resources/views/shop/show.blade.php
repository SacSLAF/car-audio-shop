@extends('layouts.app')

@section('title', $product->name . ' - CarAudio Shop')

@section('content')
    <section class="py-16">
        <div class="container mx-auto px-4">
            <!-- Breadcrumb -->
            <nav class="flex mb-8 text-sm">
                <a href="/" class="text-gray-500 hover:text-amber-600">Home</a>
                <span class="mx-2 text-gray-400">/</span>
                <a href="/shop" class="text-gray-500 hover:text-amber-600">Shop</a>
                <span class="mx-2 text-gray-400">/</span>
                @if ($product->category)
                    <a href="{{ route('category.show', $product->category->slug) }}"
                        class="text-gray-500 hover:text-amber-600">{{ $product->category->name }}</a>
                    <span class="mx-2 text-gray-400">/</span>
                @endif
                <span class="text-gray-800 font-semibold">{{ $product->name }}</span>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Images -->
                <div>
                    <div class="bg-gray-100 rounded-xl overflow-hidden h-96 flex items-center justify-center mb-4">
                        @if ($product->main_image)
                            <img src="{{ Storage::url($product->main_image) }}" alt="{{ $product->name }}"
                                class="w-full h-full object-cover">
                        @else
                            <div class="flex flex-col items-center text-gray-400">
                                <i class="fas fa-car text-6xl mb-2"></i>
                                <span class="text-sm">No image available</span>
                            </div>
                        @endif
                    </div>

                    <!-- Thumbnail Gallery -->
                    <div class="grid grid-cols-4 gap-4">
                        @if ($product->images && is_array($product->images))
                            @foreach ($product->images as $image)
                                <div
                                    class="bg-gray-100 rounded-lg h-24 overflow-hidden cursor-pointer hover:ring-2 hover:ring-amber-600 transition">
                                    <img src="{{ Storage::url($image) }}" alt="{{ $product->name }}"
                                        class="w-full h-full object-cover">
                                </div>
                            @endforeach
                        @else
                            @for ($i = 1; $i <= 4; $i++)
                                <div
                                    class="bg-gray-100 rounded-lg h-24 flex items-center justify-center cursor-pointer hover:ring-2 hover:ring-amber-600 transition">
                                    <i class="fas fa-image text-2xl text-gray-300"></i>
                                </div>
                            @endfor
                        @endif
                    </div>
                </div>

                <!-- Product Info -->
                <div>
                    <div class="mb-2">
                        <span class="text-amber-600 font-semibold">{{ $product->brand->name ?? 'Brand' }}</span>
                        @if ($product->is_featured)
                            <span class="ml-2 bg-amber-100 text-amber-700 px-2 py-1 rounded-full text-xs font-semibold">
                                <i class="fas fa-star mr-1"></i> Featured
                            </span>
                        @endif
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>

                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-gray-600 ml-2">({{ rand(20, 100) }} Reviews)</span>
                        <span class="ml-4 text-sm text-gray-500">
                            <i class="fas fa-eye mr-1"></i> {{ $product->views }} views
                        </span>
                    </div>

                    <div class="mb-6">
                        @if ($product->compare_price)
                            <span class="text-3xl font-bold text-red-600">${{ number_format($product->price, 2) }}</span>
                            <span
                                class="text-gray-400 line-through ml-2">${{ number_format($product->compare_price, 2) }}</span>
                            <span class="ml-2 bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">
                                Save {{ $product->getDiscountPercentage() }}%
                            </span>
                        @else
                            <span class="text-3xl font-bold text-gray-800">${{ number_format($product->price, 2) }}</span>
                        @endif
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-2">
                            @if ($product->in_stock && $product->stock_quantity > 0)
                                <span class="text-green-600 font-semibold">
                                    <i class="fas fa-check-circle mr-1"></i> In Stock
                                </span>
                                <span class="text-sm text-gray-500 ml-2">({{ $product->stock_quantity }} units
                                    available)</span>
                                @if ($product->isLowStock())
                                    <span
                                        class="ml-2 bg-yellow-100 text-yellow-700 px-2 py-1 rounded-full text-xs font-semibold">
                                        Low Stock
                                    </span>
                                @endif
                            @else
                                <span class="text-red-600 font-semibold">
                                    <i class="fas fa-times-circle mr-1"></i> Out of Stock
                                </span>
                            @endif
                        </div>
                        <p class="text-gray-600 leading-relaxed">
                            {{ $product->short_description ?? 'No description available.' }}
                        </p>
                    </div>

                    <!-- Specifications -->
                    @if ($product->specifications && is_array($product->specifications) && count($product->specifications) > 0)
                        <div class="mb-6">
                            <h4 class="font-semibold mb-2">Key Features</h4>
                            <ul class="space-y-1">
                                @foreach ($product->specifications as $key => $value)
                                    <li class="flex items-start text-sm">
                                        <i class="fas fa-check-circle text-amber-600 mt-0.5 mr-2"></i>
                                        <span class="text-gray-600"><strong>{{ $key }}:</strong>
                                            {{ $value }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Quantity -->
                    @if ($product->in_stock && $product->stock_quantity > 0)
                        <div class="mb-6">
                            <h4 class="font-semibold mb-2">Quantity</h4>
                            <div class="flex items-center space-x-4">
                                <button id="decreaseQty" class="w-10 h-10 border rounded-lg hover:bg-gray-50 transition">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <span id="quantityDisplay" class="text-xl font-bold w-12 text-center">1</span>
                                <button id="increaseQty" class="w-10 h-10 border rounded-lg hover:bg-gray-50 transition">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <span class="text-sm text-gray-500">Max: {{ $product->stock_quantity }}</span>
                            </div>
                        </div>
                    @endif

                    <div class="flex flex-col sm:flex-row gap-4">
                        @if ($product->in_stock && $product->stock_quantity > 0)
                            <button
                                class="flex-1 bg-amber-600 hover:bg-amber-700 text-white font-bold py-4 px-6 rounded-lg transition transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                                <i class="fas fa-cart-plus mr-2"></i> Add to Cart
                            </button>
                            <button
                                class="flex-1 bg-gray-800 hover:bg-gray-900 text-white font-bold py-4 px-6 rounded-lg transition transform hover:scale-[1.02]">
                                <i class="fas fa-bolt mr-2"></i> Buy Now
                            </button>
                        @else
                            <button disabled
                                class="flex-1 bg-gray-400 cursor-not-allowed text-white font-bold py-4 px-6 rounded-lg">
                                <i class="fas fa-times mr-2"></i> Out of Stock
                            </button>
                            <button
                                class="flex-1 bg-amber-600 hover:bg-amber-700 text-white font-bold py-4 px-6 rounded-lg transition">
                                <i class="fas fa-bell mr-2"></i> Notify Me
                            </button>
                        @endif
                    </div>

                    <div class="mt-6 flex flex-wrap gap-4 text-sm text-gray-600">
                        <span><i class="fas fa-truck text-amber-600 mr-1"></i> Free Shipping</span>
                        <span><i class="fas fa-undo text-amber-600 mr-1"></i> 30-Day Returns</span>
                        <span><i class="fas fa-shield-alt text-amber-600 mr-1"></i> Secure Checkout</span>
                        @if ($product->weight)
                            <span><i class="fas fa-weight-hanging text-amber-600 mr-1"></i> {{ $product->weight }}
                                kg</span>
                        @endif
                    </div>

                    <!-- Share -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-500 mb-2">Share this product:</p>
                        <div class="flex space-x-2">
                            <a href="#"
                                class="bg-gray-100 hover:bg-blue-600 hover:text-white p-2 rounded-full transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-100 hover:bg-blue-400 hover:text-white p-2 rounded-full transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-100 hover:bg-pink-600 hover:text-white p-2 rounded-full transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-100 hover:bg-green-600 hover:text-white p-2 rounded-full transition">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Details Tabs -->
            <div class="mt-16" x-data="{ activeTab: 'description' }">
                <div class="border-b border-gray-200">
                    <nav class="flex flex-wrap gap-4 md:gap-8">
                        <button @click="activeTab = 'description'"
                            :class="{ 'border-amber-600 text-amber-600': activeTab === 'description', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'description' }"
                            class="py-4 px-1 border-b-2 font-semibold transition">
                            Description
                        </button>
                        @if ($product->specifications && is_array($product->specifications) && count($product->specifications) > 0)
                            <button @click="activeTab = 'specifications'"
                                :class="{ 'border-amber-600 text-amber-600': activeTab === 'specifications', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'specifications' }"
                                class="py-4 px-1 border-b-2 font-semibold transition">
                                Specifications
                            </button>
                        @endif
                        <button @click="activeTab = 'reviews'"
                            :class="{ 'border-amber-600 text-amber-600': activeTab === 'reviews', 'border-transparent text-gray-500 hover:text-gray-700': activeTab !== 'reviews' }"
                            class="py-4 px-1 border-b-2 font-semibold transition">
                            Reviews ({{ rand(20, 100) }})
                        </button>
                    </nav>
                </div>

                <div class="py-8">
                    <!-- Description Tab -->
                    <div x-show="activeTab === 'description'" x-transition>
                        <h3 class="text-xl font-bold mb-4">Product Description</h3>
                        <div class="text-gray-600 leading-relaxed prose max-w-none">
                            {!! $product->description ?? '<p>No description available.</p>' !!}
                        </div>
                    </div>

                    <!-- Specifications Tab -->
                    @if ($product->specifications && is_array($product->specifications) && count($product->specifications) > 0)
                        <div x-show="activeTab === 'specifications'" x-transition>
                            <h3 class="text-xl font-bold mb-4">Technical Specifications</h3>
                            <div class="bg-gray-50 rounded-xl overflow-hidden">
                                <table class="w-full">
                                    <tbody>
                                        @foreach ($product->specifications as $key => $value)
                                            <tr class="border-b border-gray-200 last:border-0">
                                                <td class="px-6 py-3 font-semibold text-gray-700 bg-gray-100/50 w-1/3">
                                                    {{ $key }}</td>
                                                <td class="px-6 py-3 text-gray-600">{{ $value }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    <!-- Reviews Tab -->
                    <div x-show="activeTab === 'reviews'" x-transition>
                        <h3 class="text-xl font-bold mb-4">Customer Reviews</h3>
                        <div class="flex items-start space-x-8 mb-8">
                            <div class="text-center">
                                <div class="text-5xl font-bold text-gray-800">4.5</div>
                                <div class="flex text-yellow-400 mt-2">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p class="text-sm text-gray-500 mt-1">{{ rand(20, 100) }} Reviews</p>
                            </div>
                            <div class="flex-1">
                                @foreach ([5, 4, 3, 2, 1] as $star)
                                    <div class="flex items-center gap-2 text-sm">
                                        <span class="w-8 text-gray-600">{{ $star }}★</span>
                                        <div class="flex-1 h-2 bg-gray-200 rounded-full overflow-hidden">
                                            <div class="h-full bg-yellow-400 rounded-full"
                                                style="width: {{ rand(60, 95) }}%"></div>
                                        </div>
                                        <span class="w-12 text-gray-400 text-xs">{{ rand(5, 50) }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Sample Reviews -->
                        <div class="space-y-4">
                            @for ($i = 1; $i <= 3; $i++)
                                <div class="bg-gray-50 rounded-xl p-4">
                                    <div class="flex items-center justify-between mb-2">
                                        <div class="flex items-center space-x-3">
                                            <div
                                                class="w-10 h-10 bg-amber-100 rounded-full flex items-center justify-center text-amber-600 font-bold">
                                                {{ chr(rand(65, 90)) }}
                                            </div>
                                            <div>
                                                <p class="font-semibold text-gray-800">Customer {{ $i }}</p>
                                                <div class="flex text-yellow-400 text-sm">
                                                    @for ($j = 1; $j <= 5; $j++)
                                                        <i class="fas fa-star"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                        <span class="text-xs text-gray-400">{{ rand(1, 30) }} days ago</span>
                                    </div>
                                    <p class="text-gray-600 text-sm leading-relaxed">
                                        "{{ ['Excellent product! Highly recommended.', 'Great quality and sound!', 'Perfect for my car, love it!', 'Amazing value for the price.', 'Best car audio product I\'ve ever bought.'][$i - 1] }}"
                                    </p>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            @if ($relatedProducts && $relatedProducts->count() > 0)
                <div class="mt-16">
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-2xl font-bold text-gray-800">Related Products</h2>
                        <a href="/shop"
                            class="text-amber-600 hover:text-amber-700 font-semibold inline-flex items-center group">
                            View All <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        @foreach ($relatedProducts as $related)
                            <div
                                class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition duration-300 group overflow-hidden">
                                <div class="relative overflow-hidden h-48 bg-gray-200">
                                    @if ($related->main_image)
                                        <img src="{{ Storage::url($related->main_image) }}" alt="{{ $related->name }}"
                                            class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                                    @else
                                        <div
                                            class="absolute inset-0 bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center">
                                            <i class="fas fa-car text-3xl text-gray-400/50"></i>
                                        </div>
                                    @endif
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold hover:text-amber-600 transition line-clamp-1">
                                        <a href="{{ route('product.show', $related) }}">{{ $related->name }}</a>
                                    </h3>
                                    <div class="flex items-center justify-between mt-2">
                                        <div>
                                            @if ($related->compare_price)
                                                <span
                                                    class="text-gray-400 line-through text-sm mr-1">${{ number_format($related->compare_price, 2) }}</span>
                                                <span
                                                    class="font-bold text-red-600">${{ number_format($related->price, 2) }}</span>
                                            @else
                                                <span
                                                    class="font-bold text-gray-800">${{ number_format($related->price, 2) }}</span>
                                            @endif
                                        </div>
                                        <button
                                            class="bg-amber-600 hover:bg-amber-700 text-white px-3 py-1.5 rounded-lg transition text-sm">
                                            <i class="fas fa-cart-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    @push('scripts')
        <script>
            // Quantity selector functionality
            document.addEventListener('DOMContentLoaded', function() {
                const decreaseBtn = document.getElementById('decreaseQty');
                const increaseBtn = document.getElementById('increaseQty');
                const quantityDisplay = document.getElementById('quantityDisplay');
                const maxStock = {{ $product->stock_quantity ?? 10 }};
                let quantity = 1;

                if (decreaseBtn && increaseBtn && quantityDisplay) {
                    decreaseBtn.addEventListener('click', function() {
                        if (quantity > 1) {
                            quantity--;
                            quantityDisplay.textContent = quantity;
                        }
                    });

                    increaseBtn.addEventListener('click', function() {
                        if (quantity < maxStock) {
                            quantity++;
                            quantityDisplay.textContent = quantity;
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection
