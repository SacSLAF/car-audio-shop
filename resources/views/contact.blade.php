@extends('layouts.app')

@section('title', 'Contact Us - CarAudio Shop')

@section('content')
    <!-- Hero Section - Identical to About & Services Pages -->
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
                        <i class="fas fa-headset mr-2"></i> Get In Touch
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    Contact <span class="text-yellow-300">Us</span>
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    We'd love to hear from you. Get in touch with us today for any inquiries or appointments.
                </p>
            </div>
        </div>
        <!-- Contact Icon Decoration -->
        <div class="absolute bottom-0 right-0 text-white/5 text-9xl">
            <i class="fas fa-envelope"></i>
        </div>
    </section>

    <div class="container mx-auto px-4 py-16">
        <!-- Success Message -->
        @if (session('success'))
            <div class="max-w-4xl mx-auto mb-8">
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg flex items-center">
                    <i class="fas fa-check-circle text-2xl mr-3"></i>
                    <div>
                        <p class="font-bold">Success!</p>
                        <p>{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Contact Form -->
            <div class="bg-white rounded-2xl shadow-xl p-8 hover:shadow-2xl transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                        <i class="fas fa-paper-plane text-xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Send Us a Message</h2>
                </div>

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-medium mb-2">
                            <i class="fas fa-user text-amber-600 mr-2"></i>Your Name
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent transition"
                            placeholder="Enter your full name">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium mb-2">
                            <i class="fas fa-envelope text-amber-600 mr-2"></i>Email Address
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent transition"
                            placeholder="Enter your email address">
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-medium mb-2">
                            <i class="fas fa-phone text-amber-600 mr-2"></i>Phone Number
                        </label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent transition"
                            placeholder="Enter your phone number">
                        @error('phone')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-medium mb-2">
                            <i class="fas fa-tag text-amber-600 mr-2"></i>Subject
                        </label>
                        <input type="text" id="subject" name="subject" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent transition"
                            placeholder="What is this about?">
                        @error('subject')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-medium mb-2">
                            <i class="fas fa-comment text-amber-600 mr-2"></i>Message
                        </label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600 focus:border-transparent transition resize-none"
                            placeholder="Tell us about your requirements..."></textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white font-bold py-3 px-6 rounded-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Send Message
                    </button>
                </form>
            </div>

            <!-- Contact Info -->
            <div>
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl shadow-xl p-8 mb-8 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div
                            class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-address-card text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">Get in Touch</h2>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start group hover:bg-amber-50 p-3 rounded-lg transition">
                            <div
                                class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-amber-600 group-hover:text-white transition">
                                <i class="fas fa-map-marker-alt text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Address</h4>
                                <p class="text-gray-600">123 Main Street<br>City, State 12345</p>
                            </div>
                        </div>

                        <div class="flex items-start group hover:bg-amber-50 p-3 rounded-lg transition">
                            <div
                                class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-amber-600 group-hover:text-white transition">
                                <i class="fas fa-phone text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Phone</h4>
                                <a href="tel:+15551234567" class="text-gray-600 hover:text-amber-600 transition">
                                    +1 (555) 123-4567
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start group hover:bg-amber-50 p-3 rounded-lg transition">
                            <div
                                class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-amber-600 group-hover:text-white transition">
                                <i class="fas fa-envelope text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Email</h4>
                                <a href="mailto:info@caraudioshop.com"
                                    class="text-gray-600 hover:text-amber-600 transition">
                                    info@caraudioshop.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start group hover:bg-amber-50 p-3 rounded-lg transition">
                            <div
                                class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0 group-hover:bg-amber-600 group-hover:text-white transition">
                                <i class="fas fa-clock text-xl"></i>
                            </div>
                            <div class="ml-4">
                                <h4 class="font-bold text-gray-800">Business Hours</h4>
                                <p class="text-gray-600">Mon-Sat: 9:00 AM - 9:00 PM<br>Sunday: Closed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h4 class="font-bold text-gray-800 mb-3">Follow Us</h4>
                        <div class="flex space-x-3">
                            <a href="#"
                                class="bg-gray-200 hover:bg-amber-600 text-gray-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-200 hover:bg-amber-600 text-gray-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-200 hover:bg-amber-600 text-gray-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-200 hover:bg-amber-600 text-gray-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="#"
                                class="bg-gray-200 hover:bg-amber-600 text-gray-600 hover:text-white w-10 h-10 rounded-full flex items-center justify-center transition duration-300">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Google Maps -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
                    <div
                        class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center relative">
                        <div class="text-center">
                            <i class="fas fa-map-marked-alt text-6xl text-amber-600/50"></i>
                            <p class="mt-2 text-gray-500 font-medium">Find Us Here</p>
                            <p class="text-sm text-gray-400">123 Main Street, City</p>
                        </div>
                        <!-- You can replace this with actual Google Maps embed -->
                        <!-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.2219901290355!2d-74.00369368400567!3d40.71312937933038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316bb82c0f%3A0xa9f25b0f85d9e5a5!2s123%20Main%20St%2C%20New%20York%2C%20NY%2010001!5e0!3m2!1sen!2sus!4v1644262070686!5m2!1sen!2sus"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Contact Options -->
        <div class="max-w-6xl mx-auto mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div
                class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 text-center border border-amber-200 hover:shadow-lg transition duration-300">
                <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-phone fa-2x"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-1">Call Us</h4>
                <p class="text-gray-600">Mon-Sat 9AM - 9PM</p>
                <a href="tel:+15551234567" class="text-amber-600 font-semibold hover:text-amber-700">
                    +1 (555) 123-4567
                </a>
            </div>

            <div
                class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 text-center border border-amber-200 hover:shadow-lg transition duration-300">
                <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-comment fa-2x"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-1">Live Chat</h4>
                <p class="text-gray-600">Available 24/7</p>
                <a href="#" class="text-amber-600 font-semibold hover:text-amber-700">
                    Start Chat Now
                </a>
            </div>

            <div
                class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-xl p-6 text-center border border-amber-200 hover:shadow-lg transition duration-300">
                <div class="bg-amber-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-calendar-check fa-2x"></i>
                </div>
                <h4 class="font-bold text-gray-800 mb-1">Book Appointment</h4>
                <p class="text-gray-600">Schedule a visit</p>
                <a href="#" class="text-amber-600 font-semibold hover:text-amber-700">
                    Book Now
                </a>
            </div>
        </div>
    </div>
@endsection
