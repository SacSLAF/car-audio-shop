@extends('layouts.app')

@section('title', 'Contact Us - CarAudio Shop')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Contact Us</h1>
        <p class="text-gray-600 text-lg">We'd love to hear from you. Get in touch with us today!</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>
            <form action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Your Name</label>
                    <input type="text" id="name" name="name" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                </div>
                <div class="mb-4">
                    <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                    <input type="text" id="subject" name="subject" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600"></textarea>
                </div>
                <button type="submit"
                        class="w-full bg-amber-600 hover:bg-amber-700 text-white font-bold py-3 px-6 rounded-lg transition">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Info -->
        <div>
            <div class="bg-gray-50 rounded-lg shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold mb-6">Get in Touch</h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">Address</h4>
                            <p class="text-gray-600">123 Main Street<br>City, State 12345</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">Phone</h4>
                            <p class="text-gray-600">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">Email</h4>
                            <p class="text-gray-600">info@caraudioshop.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="bg-amber-100 text-amber-600 w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-bold">Business Hours</h4>
                            <p class="text-gray-600">Mon-Sat: 9:00 AM - 9:00 PM<br>Sunday: Closed</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Google Maps Placeholder -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="h-64 bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-map-marked-alt text-6xl text-gray-400"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
