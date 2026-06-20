@extends('layouts.app')

@section('title', 'Our Services - CarAudio Shop')

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
                        <i class="fas fa-wrench mr-2"></i> Professional Services
                    </span>
                </div>
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight">
                    Our <span class="text-yellow-300">Services</span>
                </h1>
                <p class="text-xl text-gray-200 leading-relaxed">
                    Professional car audio and accessory services for all types of vehicles
                </p>
            </div>
        </div>
        <div class="absolute bottom-0 right-0 text-white/5 text-9xl">
            <i class="fas fa-tools"></i>
        </div>
    </section>

    <!-- Main Services -->
    <div class="container mx-auto px-4 py-16">
        <!-- Audio Systems -->
        <div class="mb-16" id="audio">
            <div class="flex items-center mb-8">
                <div class="bg-amber-600 p-3 rounded-lg mr-4">
                    <i class="fas fa-music text-white text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Audio Systems</h2>
                    <p class="text-gray-600">Professional audio installation and setup for superior sound quality</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Audio Setup Installation -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-amber-500 to-amber-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-amber-100 text-amber-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-volume-up text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Audio Setup Installation</h3>
                        <p class="text-gray-600 mb-4">
                            Professional installation of complete audio systems including head units, amplifiers, speakers,
                            and subwoofers for optimal sound quality.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-amber-600 mt-1 mr-2"></i>
                                <span>Full system installation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-amber-600 mt-1 mr-2"></i>
                                <span>Custom tuning and calibration</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-amber-600 mt-1 mr-2"></i>
                                <span>Sound deadening solutions</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Audio Setup Installation']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- Amplifier Installation -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-blue-100 text-blue-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-bolt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Amplifier Installation</h3>
                        <p class="text-gray-600 mb-4">
                            Expert amplifier installation to power your speakers and subwoofers for crystal clear sound at
                            any volume.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Mono and multi-channel amps</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Proper wiring and fusing</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Gain and crossover tuning</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Amplifier Installation']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- System Tuning -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-purple-100 text-purple-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-headphones text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">System Tuning</h3>
                        <p class="text-gray-600 mb-4">
                            Professional audio tuning to achieve the perfect sound balance for your vehicle's acoustics.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                                <span>Equalizer optimization</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                                <span>Time alignment</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-purple-600 mt-1 mr-2"></i>
                                <span>Phase correction</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'System Tuning']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lighting Services -->
        <div class="mb-16" id="lighting">
            <div class="flex items-center mb-8">
                <div class="bg-blue-600 p-3 rounded-lg mr-4">
                    <i class="fas fa-lightbulb text-white text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Lighting Solutions</h2>
                    <p class="text-gray-600">Premium lighting upgrades for safety and style</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Fog Lights -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-yellow-400 to-yellow-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-yellow-100 text-yellow-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-car text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Fog Lights Installation</h3>
                        <p class="text-gray-600 mb-4">
                            Professional installation of high-quality fog lights for improved visibility in adverse weather
                            conditions.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-600 mt-1 mr-2"></i>
                                <span>LED and Halogen fog lights</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-600 mt-1 mr-2"></i>
                                <span>Proper alignment and wiring</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-yellow-600 mt-1 mr-2"></i>
                                <span>Weatherproof installation</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Fog Lights Installation']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- LED Light Upgrades -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-blue-100 text-blue-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-sun text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">LED Light Upgrades</h3>
                        <p class="text-gray-600 mb-4">
                            Upgrade your vehicle's lighting to energy-efficient, long-lasting LED lights for better
                            visibility and style.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Headlight conversions</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Interior LED lighting</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-blue-600 mt-1 mr-2"></i>
                                <span>Daytime running lights</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'LED Light Upgrades']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- All Kind of Lightings -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-indigo-100 text-indigo-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-tachometer-alt text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">All Kind of Lightings</h3>
                        <p class="text-gray-600 mb-4">
                            Complete lighting solutions for every part of your vehicle including interior, exterior, and
                            accent lighting.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-600 mt-1 mr-2"></i>
                                <span>Interior ambient lighting</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-600 mt-1 mr-2"></i>
                                <span>Exterior accent lighting</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-indigo-600 mt-1 mr-2"></i>
                                <span>Custom lighting designs</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'All Kind of Lightings']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vehicle Accessories -->
        <div class="mb-16" id="accessories">
            <div class="flex items-center mb-8">
                <div class="bg-green-600 p-3 rounded-lg mr-4">
                    <i class="fas fa-cogs text-white text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Vehicle Accessories</h2>
                    <p class="text-gray-600">Quality accessories for comfort, safety, and convenience</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Door Visors -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-red-500 to-red-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-red-100 text-red-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-door-open text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Door Visors Installation</h3>
                        <p class="text-gray-600 mb-4">
                            Professional installation of door visors for ventilation, rain protection, and enhanced vehicle
                            styling.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-red-600 mt-1 mr-2"></i>
                                <span>All vehicle types</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-red-600 mt-1 mr-2"></i>
                                <span>Secure and durable installation</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-red-600 mt-1 mr-2"></i>
                                <span>Weather-resistant materials</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Door Visors Installation']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- Carpets & Floor Mats -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-gray-500 to-gray-700 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-gray-100 text-gray-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-carpet text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Carpets & Floor Mats</h3>
                        <p class="text-gray-600 mb-4">
                            Quality carpets and floor mats designed specifically for every type of car and motor vehicle.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-600 mt-1 mr-2"></i>
                                <span>Custom fit for all vehicles</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-600 mt-1 mr-2"></i>
                                <span>Durable and easy to clean</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-gray-600 mt-1 mr-2"></i>
                                <span>Premium quality materials</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Carpets & Floor Mats']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- Rat Nets -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-teal-500 to-teal-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-teal-100 text-teal-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-rat text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Rat Nets & Protection</h3>
                        <p class="text-gray-600 mb-4">
                            Professional installation of rat nets and protective covers for all types of cars and motor
                            vehicles.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-teal-600 mt-1 mr-2"></i>
                                <span>All vehicle sizes and types</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-teal-600 mt-1 mr-2"></i>
                                <span>Durable and weatherproof</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-teal-600 mt-1 mr-2"></i>
                                <span>Custom fitting available</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Rat Nets & Protection']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Camera Systems -->
        <div class="mb-16" id="cameras">
            <div class="flex items-center mb-8">
                <div class="bg-purple-600 p-3 rounded-lg mr-4">
                    <i class="fas fa-video text-white text-2xl"></i>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-800">Camera Systems</h2>
                    <p class="text-gray-600">Advanced camera solutions for safety and convenience</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Side Mirror Cameras -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-pink-500 to-pink-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-pink-100 text-pink-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-camera text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Side Mirror Cameras</h3>
                        <p class="text-gray-600 mb-4">
                            Professional installation of side mirror cameras for enhanced visibility and safety while
                            driving.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-pink-600 mt-1 mr-2"></i>
                                <span>High-definition cameras</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-pink-600 mt-1 mr-2"></i>
                                <span>Weatherproof design</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-pink-600 mt-1 mr-2"></i>
                                <span>Seamless integration</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Side Mirror Cameras']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- 360° View Cameras -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-cyan-500 to-cyan-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-cyan-100 text-cyan-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-eye text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">360° View Cameras</h3>
                        <p class="text-gray-600 mb-4">
                            Complete 360° camera system installation for bird's-eye view and maximum parking safety.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cyan-600 mt-1 mr-2"></i>
                                <span>4-camera system</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cyan-600 mt-1 mr-2"></i>
                                <span>HD display integration</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-cyan-600 mt-1 mr-2"></i>
                                <span>Recording capabilities</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => '360° View Cameras']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>

                <!-- Reverse Camera -->
                <div
                    class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden group">
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 h-2"></div>
                    <div class="p-6">
                        <div
                            class="bg-orange-100 text-orange-600 w-14 h-14 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                            <i class="fas fa-car-side text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Reverse Camera Systems</h3>
                        <p class="text-gray-600 mb-4">
                            Professional reverse camera installation for safe and easy parking and reversing.
                        </p>
                        <ul class="space-y-2 text-sm text-gray-600">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-orange-600 mt-1 mr-2"></i>
                                <span>Night vision capability</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-orange-600 mt-1 mr-2"></i>
                                <span>Parking guidelines</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-orange-600 mt-1 mr-2"></i>
                                <span>All vehicle compatibility</span>
                            </li>
                        </ul>
                        <a href="{{ route('service-booking.index', ['service' => 'Reverse Camera Systems']) }}"
                            class="mt-4 inline-block w-full text-center bg-amber-600 hover:bg-amber-700 text-white font-bold py-2 px-4 rounded-lg transition">
                            <i class="fas fa-calendar-check mr-1"></i> Book This Service
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vehicle Compatibility Note -->
        <div class="bg-gradient-to-r from-amber-50 to-orange-50 rounded-2xl p-8 border-2 border-amber-200">
            <div class="flex items-start">
                <div class="bg-amber-600 text-white p-3 rounded-lg mr-4 flex-shrink-0">
                    <i class="fas fa-truck text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">All Vehicle Types Covered</h3>
                    <p class="text-gray-700 mb-3">
                        We provide services for all types of vehicles including:
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <span class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-medium text-gray-700">
                            <i class="fas fa-car text-amber-600 mr-1"></i> Cars
                        </span>
                        <span class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-medium text-gray-700">
                            <i class="fas fa-truck text-amber-600 mr-1"></i> SUVs
                        </span>
                        <span class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-medium text-gray-700">
                            <i class="fas fa-shuttle-van text-amber-600 mr-1"></i> Vans
                        </span>
                        <span class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-medium text-gray-700">
                            <i class="fas fa-truck-pickup text-amber-600 mr-1"></i> Pickups
                        </span>
                        <span class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-medium text-gray-700">
                            <i class="fas fa-tractor text-amber-600 mr-1"></i> Motor Vehicles
                        </span>
                        <span class="bg-white px-4 py-2 rounded-full shadow-sm text-sm font-medium text-gray-700">
                            <i class="fas fa-bus text-amber-600 mr-1"></i> Buses
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 bg-gradient-to-r from-amber-600 to-amber-800 rounded-2xl p-12 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-xl text-gray-200 mb-8 max-w-2xl mx-auto">
                Contact us today for a free consultation and quote for your vehicle
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{ route('service-booking.index') }}"
                    class="inline-flex items-center justify-center bg-white hover:bg-gray-100 text-amber-600 px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <i class="fas fa-calendar-check mr-2"></i> Book Now
                </a>
                <a href="tel:+15551234567"
                    class="inline-flex items-center justify-center bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-lg font-bold text-lg transition shadow-lg hover:shadow-xl hover:-translate-y-0.5">
                    <i class="fas fa-phone mr-2"></i> Call Now
                </a>
            </div>
        </div>
    </div>
@endsection
