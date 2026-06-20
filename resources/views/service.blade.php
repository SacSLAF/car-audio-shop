@extends('layouts.app')

@section('title', 'Our Services - CarAudio Shop')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Our Services</h1>
        <p class="text-gray-600 text-lg">Professional car audio installation and services</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach(['Professional Installation', 'System Tuning', 'Custom Fabrication', 'Troubleshooting', 'Upgrade Consultation', 'Warranty Service'] as $service)
        <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition p-6 text-center group">
            <div class="bg-amber-100 text-amber-600 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition">
                <i class="fas fa-tools text-3xl"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $service }}</h3>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor.
            </p>
        </div>
        @endforeach
    </div>

    <div class="mt-16 bg-amber-50 rounded-lg p-8 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Need Professional Installation?</h2>
        <p class="text-gray-600 mb-6">Our certified technicians are ready to help you get the perfect sound.</p>
        <a href="/contact" class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg font-bold transition">
            Book Now
        </a>
    </div>
</div>
@endsection
