<footer class="bg-gray-900 text-white">
    <!-- Main Footer -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div>
                <div class="flex items-center mb-4">
                    <div class="bg-amber-600 text-white p-2 rounded-lg mr-3">
                        <i class="fas fa-car-side text-2xl"></i>
                    </div>
                    <div>
                        <span class="text-2xl font-extrabold text-amber-600">CarAudio</span>
                        <span class="text-2xl font-light text-gray-300">Shop</span>
                    </div>
                </div>
                <p class="text-gray-400 mb-4">Your one-stop destination for premium car audio systems, speakers, subwoofers, and accessories.</p>
                <div class="flex space-x-4">
                    <a href="#" class="bg-gray-800 hover:bg-amber-600 p-2 rounded-full transition duration-300">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-amber-600 p-2 rounded-full transition duration-300">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-amber-600 p-2 rounded-full transition duration-300">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-gray-800 hover:bg-amber-600 p-2 rounded-full transition duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="text-gray-400 hover:text-amber-600 transition">Home</a></li>
                    <li><a href="/shop" class="text-gray-400 hover:text-amber-600 transition">Shop</a></li>
                    <li><a href="/about" class="text-gray-400 hover:text-amber-600 transition">About Us</a></li>
                    <li><a href="/services" class="text-gray-400 hover:text-amber-600 transition">Services</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-amber-600 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div>
                <h4 class="text-xl font-bold mb-4">Categories</h4>
                <ul class="space-y-2">
                    <li><a href="/shop?category=speakers" class="text-gray-400 hover:text-amber-600 transition">Speakers</a></li>
                    <li><a href="/shop?category=subwoofers" class="text-gray-400 hover:text-amber-600 transition">Subwoofers</a></li>
                    <li><a href="/shop?category=amplifiers" class="text-gray-400 hover:text-amber-600 transition">Amplifiers</a></li>
                    <li><a href="/shop?category=head-units" class="text-gray-400 hover:text-amber-600 transition">Head Units</a></li>
                    <li><a href="/shop?category=accessories" class="text-gray-400 hover:text-amber-600 transition">Accessories</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="text-xl font-bold mb-4">Contact Info</h4>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-amber-600 mt-1 mr-3"></i>
                        <span class="text-gray-400">123 Main Street, City, State 12345</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone text-amber-600 mt-1 mr-3"></i>
                        <span class="text-gray-400">+1 (555) 123-4567</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-amber-600 mt-1 mr-3"></i>
                        <span class="text-gray-400">info@caraudioshop.com</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-clock text-amber-600 mt-1 mr-3"></i>
                        <span class="text-gray-400">Mon-Sat: 9:00 AM - 9:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="border-t border-gray-800 mt-12 pt-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div>
                    <h4 class="text-xl font-bold mb-2">Subscribe to Our Newsletter</h4>
                    <p class="text-gray-400">Get the latest updates on new products and special offers.</p>
                </div>
                <div>
                    <form action="#" method="POST" class="flex">
                        <input type="email" placeholder="Your email address"
                               class="flex-1 px-4 py-3 bg-gray-800 border border-gray-700 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-amber-600 text-white">
                        <button type="submit" class="bg-amber-600 hover:bg-amber-700 px-6 py-3 rounded-r-lg transition">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
            <p>&copy; {{ date('Y') }} CarAudio Shop. All rights reserved.</p>
        </div>
    </div>
</footer>
