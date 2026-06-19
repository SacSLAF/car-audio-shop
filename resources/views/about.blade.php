@extends('layouts.app')

@section('title', 'About Us - CarAudio Shop')

@section('content')
    <!-- Hero Section -->
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
                        <i class="fas fa-car mr-2"></i> Since 2010
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    About <span class="text-yellow-300">CarAudio</span> Shop
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    Your trusted partner for premium car audio systems, lighting solutions, and vehicle accessories.
                </p>
            </div>
        </div>
        <!-- Car Silhouette Decoration -->
        <div class="absolute bottom-0 right-0 text-white/5 text-9xl">
            <i class="fas fa-car-side"></i>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-block bg-amber-100 text-amber-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">
                        <i class="fas fa-star mr-2"></i> Our Story
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                        Driving Excellence Since <span class="text-amber-600">2010</span>
                    </h2>
                    <div class="space-y-4 text-gray-600 leading-relaxed">
                        <p>
                            Founded in 2010, CarAudio Shop was born from a passion for automotive sound and a vision to
                            deliver premium audio experiences to every driver. What started as a small workshop has grown
                            into a trusted destination for car audio enthusiasts across the country.
                        </p>
                        <p>
                            Over the years, we've expanded our expertise beyond audio to include advanced lighting
                            solutions, camera systems, and vehicle accessories, always maintaining our commitment to quality
                            and customer satisfaction.
                        </p>
                        <p>
                            Today, we continue to push boundaries, bringing the latest technology and innovation to every
                            vehicle we work on.
                        </p>
                    </div>
                    <div class="mt-6 flex flex-wrap gap-6">
                        <div>
                            <div class="text-3xl font-bold text-amber-600">5000+</div>
                            <div class="text-sm text-gray-600">Happy Customers</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-amber-600">50+</div>
                            <div class="text-sm text-gray-600">Trusted Brands</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-amber-600">10000+</div>
                            <div class="text-sm text-gray-600">Installs Completed</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-amber-100 to-orange-100 rounded-2xl p-8 shadow-2xl">
                        <div class="relative">
                            <div class="bg-white rounded-xl p-8 shadow-lg">
                                <div class="text-7xl text-center mb-4">🚗</div>
                                <h3 class="text-2xl font-bold text-center text-gray-800 mb-2">Your Vehicle Deserves the Best
                                </h3>
                                <p class="text-center text-gray-600">We treat every vehicle as if it were our own.</p>
                            </div>
                            <!-- Decorative elements -->
                            <div class="absolute -top-4 -right-4 w-16 h-16 bg-amber-600 rounded-full opacity-20"></div>
                            <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-orange-600 rounded-full opacity-20"></div>
                        </div>
                    </div>
                    <!-- Floating badges -->
                    <div class="absolute -top-6 -left-6 bg-white rounded-xl shadow-xl p-4 animate-bounce">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-trophy text-yellow-500 text-2xl"></i>
                            <div>
                                <p class="font-bold text-sm">Award Winning</p>
                                <p class="text-xs text-gray-500">Service Excellence</p>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-white rounded-xl shadow-xl p-4 animate-pulse">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-shield-alt text-green-500 text-2xl"></i>
                            <div>
                                <p class="font-bold text-sm">100% Trusted</p>
                                <p class="text-xs text-gray-500">5-Star Rated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block bg-amber-100 text-amber-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">
                    <i class="fas fa-bullseye mr-2"></i> Our Purpose
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Mission & Vision</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-amber-600 group-hover:text-white transition">
                        <i class="fas fa-rocket text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Our Mission</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To deliver exceptional sound quality, innovative lighting solutions, and unparalleled customer
                        service, helping every customer find the perfect upgrade for their vehicle.
                    </p>
                    <div class="mt-4 flex items-center text-amber-600">
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition"></i>
                        <span class="ml-2 text-sm font-semibold">Every vehicle, every time</span>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-lg p-8 hover:shadow-2xl transition-all duration-300 group">
                    <div
                        class="bg-amber-100 text-amber-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-4 group-hover:bg-amber-600 group-hover:text-white transition">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Our Vision</h3>
                    <p class="text-gray-600 leading-relaxed">
                        To become the most trusted name in car audio and accessories, recognized for our expertise, quality,
                        and commitment to enhancing every drive with superior sound and style.
                    </p>
                    <div class="mt-4 flex items-center text-amber-600">
                        <i class="fas fa-arrow-right group-hover:translate-x-2 transition"></i>
                        <span class="ml-2 text-sm font-semibold">Leading the industry forward</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block bg-amber-100 text-amber-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">
                    <i class="fas fa-check-double mr-2"></i> Why Choose Us
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">What Makes Us Different</h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">We go above and beyond to deliver the best experience for
                    our customers</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-user-tie text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Expert Advice</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our team of certified audio experts is here to guide you to the perfect setup for your vehicle.
                    </p>
                    <div class="mt-3 inline-block text-amber-600 text-sm font-semibold">
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-gem text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Premium Quality</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        We only stock products from the most trusted brands in the industry, ensuring durability and
                        performance.
                    </p>
                    <div class="mt-3 inline-block text-amber-600 text-sm font-semibold">
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-tools text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Professional Installation</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Certified technicians ensure flawless installation of all products for optimal performance and
                        safety.
                    </p>
                    <div class="mt-3 inline-block text-amber-600 text-sm font-semibold">
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </div>
                </div>

                <div
                    class="bg-gradient-to-br from-white to-gray-50 rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 text-center group">
                    <div
                        class="bg-amber-100 text-amber-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300 group-hover:scale-110">
                        <i class="fas fa-headset text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">24/7 Customer Support</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Our dedicated support team is always here to help with any questions or concerns you may have.
                    </p>
                    <div class="mt-3 inline-block text-amber-600 text-sm font-semibold">
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block bg-amber-100 text-amber-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">
                    <i class="fas fa-users mr-2"></i> Our Team
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Meet the Experts</h2>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                    Passionate professionals dedicated to delivering the best for your vehicle
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2"></div>
                    <div class="p-6 text-center">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-amber-100 to-amber-200 rounded-full mx-auto mb-4 flex items-center justify-center text-4xl group-hover:scale-110 transition">
                            👨‍🔧
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">John Smith</h3>
                        <p class="text-amber-600 font-semibold text-sm">Lead Audio Engineer</p>
                        <p class="text-gray-500 text-sm mt-2">15 years of experience in car audio</p>
                        <div class="mt-3 flex justify-center space-x-2">
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">Certified</span>
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">Expert</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2"></div>
                    <div class="p-6 text-center">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-amber-100 to-amber-200 rounded-full mx-auto mb-4 flex items-center justify-center text-4xl group-hover:scale-110 transition">
                            👩‍🔧
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Sarah Johnson</h3>
                        <p class="text-amber-600 font-semibold text-sm">Lighting Specialist</p>
                        <p class="text-gray-500 text-sm mt-2">10 years of automotive lighting experience</p>
                        <div class="mt-3 flex justify-center space-x-2">
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">Specialist</span>
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">LED Expert</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2"></div>
                    <div class="p-6 text-center">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-amber-100 to-amber-200 rounded-full mx-auto mb-4 flex items-center justify-center text-4xl group-hover:scale-110 transition">
                            👨‍💻
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Mike Davis</h3>
                        <p class="text-amber-600 font-semibold text-sm">Camera Systems Expert</p>
                        <p class="text-gray-500 text-sm mt-2">8 years in vehicle camera installation</p>
                        <div class="mt-3 flex justify-center space-x-2">
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">360° Expert</span>
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">Technician</span>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 group">
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2"></div>
                    <div class="p-6 text-center">
                        <div
                            class="w-24 h-24 bg-gradient-to-br from-amber-100 to-amber-200 rounded-full mx-auto mb-4 flex items-center justify-center text-4xl group-hover:scale-110 transition">
                            👩‍💼
                        </div>
                        <h3 class="text-xl font-bold text-gray-800">Emily Chen</h3>
                        <p class="text-amber-600 font-semibold text-sm">Customer Relations</p>
                        <p class="text-gray-500 text-sm mt-2">12 years of customer service excellence</p>
                        <div class="mt-3 flex justify-center space-x-2">
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">Support</span>
                            <span class="bg-amber-100 text-amber-700 text-xs px-3 py-1 rounded-full">Consultant</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block bg-amber-100 text-amber-700 px-4 py-2 rounded-full font-semibold text-sm mb-4">
                    <i class="fas fa-wrench mr-2"></i> What We Do
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Our Expertise</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <div
                    class="bg-gray-50 rounded-xl p-4 text-center hover:bg-amber-50 hover:shadow-lg transition-all duration-300">
                    <div class="text-3xl mb-2">🎵</div>
                    <p class="text-sm font-semibold text-gray-700">Audio Setup</p>
                </div>
                <div
                    class="bg-gray-50 rounded-xl p-4 text-center hover:bg-amber-50 hover:shadow-lg transition-all duration-300">
                    <div class="text-3xl mb-2">💡</div>
                    <p class="text-sm font-semibold text-gray-700">Lighting</p>
                </div>
                <div
                    class="bg-gray-50 rounded-xl p-4 text-center hover:bg-amber-50 hover:shadow-lg transition-all duration-300">
                    <div class="text-3xl mb-2">🚪</div>
                    <p class="text-sm font-semibold text-gray-700">Door Visors</p>
                </div>
                <div
                    class="bg-gray-50 rounded-xl p-4 text-center hover:bg-amber-50 hover:shadow-lg transition-all duration-300">
                    <div class="text-3xl mb-2">📷</div>
                    <p class="text-sm font-semibold text-gray-700">Cameras</p>
                </div>
                <div
                    class="bg-gray-50 rounded-xl p-4 text-center hover:bg-amber-50 hover:shadow-lg transition-all duration-300">
                    <div class="text-3xl mb-2">🔄</div>
                    <p class="text-sm font-semibold text-gray-700">360° View</p>
                </div>
                <div
                    class="bg-gray-50 rounded-xl p-4 text-center hover:bg-amber-50 hover:shadow-lg transition-all duration-300">
                    <div class="text-3xl mb-2">🛡️</div>
                    <p class="text-sm font-semibold text-gray-700">Rat Nets</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-gradient-to-r from-amber-600 to-amber-800 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-block bg-white/20 backdrop-blur-sm px-6 py-2 rounded-full font-semibold text-sm mb-4">
                    <i class="fas fa-quote-left mr-2"></i> Testimonials
                </div>
                <h2 class="text-3xl md:text-4xl font-bold">What Our Customers Say</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex text-yellow-300 mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-200 leading-relaxed">
                        "The audio system they installed in my car is incredible! Professional service from start to
                        finish."
                    </p>
                    <div class="mt-4 flex items-center">
                        <div
                            class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-amber-800 font-bold">
                            JD
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold">John D.</p>
                            <p class="text-sm text-gray-300">Happy Customer</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex text-yellow-300 mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-200 leading-relaxed">
                        "The 360° camera system is a game-changer! Parking has never been easier. Highly recommend!"
                    </p>
                    <div class="mt-4 flex items-center">
                        <div
                            class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-amber-800 font-bold">
                            SM
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold">Sarah M.</p>
                            <p class="text-sm text-gray-300">SUV Owner</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20">
                    <div class="flex text-yellow-300 mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-200 leading-relaxed">
                        "Best car audio shop in town! They did an amazing job with my fog lights and audio system."
                    </p>
                    <div class="mt-4 flex items-center">
                        <div
                            class="w-10 h-10 bg-amber-400 rounded-full flex items-center justify-center text-amber-800 font-bold">
                            MR
                        </div>
                        <div class="ml-3">
                            <p class="font-semibold">Mike R.</p>
                            <p class="text-sm text-gray-300">Car Enthusiast</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                    Ready to Transform Your Vehicle?
                </h2>
                <p class="text-xl text-gray-600 mb-8">
                    Contact us today for a free consultation and discover what we can do for your car.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact"
                        class="inline-flex items-center justify-center bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg hover:shadow-xl">
                        <i class="fas fa-calendar-check mr-2"></i>
                        Get a Free Quote
                    </a>
                    <a href="/services"
                        class="inline-flex items-center justify-center border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white px-8 py-4 rounded-lg font-bold text-lg transition">
                        <i class="fas fa-wrench mr-2"></i>
                        Our Services
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-bounce {
            animation: float 3s ease-in-out infinite;
        }
    </style>
@endsection
