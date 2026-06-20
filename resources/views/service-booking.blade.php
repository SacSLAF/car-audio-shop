@extends('layouts.app')

@section('title', 'Book a Service - CarAudio Shop')

@section('content')
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
                        <i class="fas fa-calendar-check mr-2"></i> Book a Service
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    Book Your <span class="text-yellow-300">Service</span>
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    Fill in the details below and we'll get back to you within 24 hours
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 text-white/5 text-9xl">
            <i class="fas fa-tools"></i>
        </div>
    </section>

    <div class="container mx-auto px-4 py-16">
        <div class="max-w-4xl mx-auto">
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg mb-8">
                    <p class="font-bold"><i class="fas fa-check-circle mr-2"></i> Success!</p>
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            <div class="bg-white rounded-2xl shadow-xl p-8">
                <form action="{{ route('service-booking.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Customer Name -->
                        <div class="col-span-2">
                            <label for="customer_name" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-user text-amber-600 mr-2"></i> Full Name *
                            </label>
                            <input type="text" id="customer_name" name="customer_name" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600"
                                placeholder="Enter your full name">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-envelope text-amber-600 mr-2"></i> Email
                            </label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600"
                                placeholder="Enter your email address">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-phone text-amber-600 mr-2"></i> Phone Number *
                            </label>
                            <input type="tel" id="phone" name="phone" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600"
                                placeholder="Enter your phone number">
                        </div>

                        <!-- Vehicle Type -->
                        <div>
                            <label for="vehicle_type" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-car text-amber-600 mr-2"></i> Vehicle Type *
                            </label>
                            <select id="vehicle_type" name="vehicle_type" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                                <option value="">Select vehicle type</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Daihatsu">Daihatsu</option>
                                <option value="Micro">Micro</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Honda">Honda</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="BMW">BMW</option>
                                <option value="Mercedes">Mercedes</option>
                                <option value="Audi">Audi</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- Vehicle Model -->
                        <div>
                            <label for="vehicle_model" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-car-side text-amber-600 mr-2"></i> Vehicle Model
                            </label>
                            <input type="text" id="vehicle_model" name="vehicle_model"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600"
                                placeholder="e.g., Raize, Premio, Wagon R">
                        </div>

                        <!-- Vehicle Year -->
                        <div>
                            <label for="vehicle_year" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-calendar text-amber-600 mr-2"></i> Vehicle Year
                            </label>
                            <select id="vehicle_year" name="vehicle_year"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                                <option value="">Select year</option>
                                @for ($year = date('Y'); $year >= 2000; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </div>

                        <!-- Services -->
                        <div class="col-span-2">
                            <label class="block text-gray-700 font-semibold mb-3">
                                <i class="fas fa-tools text-amber-600 mr-2"></i> Services Required *
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                                @foreach (['Audio System Installation', 'Amplifier Installation', 'System Tuning', 'Fog Lights Installation', 'LED Light Upgrades', 'Door Visors Installation', 'Carpets & Floor Mats', 'Rat Nets & Protection', 'Side Mirror Cameras', '360° View Cameras', 'Reverse Camera Systems', 'Custom Installation'] as $service)
                                    <label
                                        class="flex items-center p-3 border border-gray-200 rounded-lg hover:bg-amber-50 cursor-pointer transition">
                                        <input type="checkbox" name="services[]" value="{{ $service }}"
                                            class="mr-2 text-amber-600 focus:ring-amber-500">
                                        <span class="text-sm">{{ $service }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <!-- Preferred Date -->
                        <div>
                            <label for="preferred_date" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-calendar-day text-amber-600 mr-2"></i> Preferred Date
                            </label>
                            <input type="date" id="preferred_date" name="preferred_date"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                        </div>

                        <!-- Preferred Time -->
                        <div>
                            <label for="preferred_time" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-clock text-amber-600 mr-2"></i> Preferred Time
                            </label>
                            <select id="preferred_time" name="preferred_time"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600">
                                <option value="">Select time</option>
                                <option value="Morning (8-12)">Morning (8-12)</option>
                                <option value="Afternoon (12-4)">Afternoon (12-4)</option>
                                <option value="Evening (4-8)">Evening (4-8)</option>
                            </select>
                        </div>

                        <!-- Additional Notes -->
                        <div class="col-span-2">
                            <label for="additional_notes" class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-comment text-amber-600 mr-2"></i> Additional Notes
                            </label>
                            <textarea id="additional_notes" name="additional_notes" rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-600"
                                placeholder="Any additional information or special requests..."></textarea>
                        </div>
                    </div>

                    <button type="submit"
                        class="w-full mt-8 bg-gradient-to-r from-amber-600 to-amber-700 hover:from-amber-700 hover:to-amber-800 text-white font-bold py-4 rounded-lg transition transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Submit Service Request
                    </button>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Get the service from URL parameter
                const urlParams = new URLSearchParams(window.location.search);
                const selectedService = urlParams.get('service');

                if (selectedService) {
                    // Find and check the corresponding checkbox
                    const checkboxes = document.querySelectorAll('input[name="services[]"]');
                    checkboxes.forEach(function(checkbox) {
                        if (checkbox.value === selectedService) {
                            checkbox.checked = true;
                            // Highlight the parent label
                            checkbox.closest('label').classList.add('bg-amber-100', 'border-amber-500');
                        }
                    });

                    // Scroll to services section
                    document.querySelector('.col-span-2').scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        </script>
    @endpush

@endsection
