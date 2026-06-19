@extends('layouts.app')

@section('title', 'About Us - CarAudio Shop')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-5xl font-bold text-center mb-8">About CarAudio Shop</h1>
        <div class="prose prose-lg mx-auto">
            <div class="bg-amber-50 border-l-4 border-amber-600 p-6 mb-8 rounded-r-lg">
                <p class="text-lg font-semibold text-amber-800">Premium Car Audio Since 2010</p>
            </div>

            <p class="text-gray-700 leading-relaxed mb-6">
                Founded in 2010, CarAudio Shop has been dedicated to providing the highest quality car audio systems and accessories to automotive enthusiasts across the country.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">Our Mission</h2>
            <p class="text-gray-700 leading-relaxed mb-6">
                To deliver exceptional sound quality and unparalleled customer service, helping every customer find the perfect audio solution for their vehicle.
            </p>

            <h2 class="text-2xl font-bold mt-8 mb-4">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-amber-600 text-3xl mb-3"><i class="fas fa-check-circle"></i></div>
                    <h3 class="font-bold text-lg mb-2">Expert Advice</h3>
                    <p class="text-gray-600">Our team of audio experts is here to guide you to the perfect setup.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-amber-600 text-3xl mb-3"><i class="fas fa-gem"></i></div>
                    <h3 class="font-bold text-lg mb-2">Premium Quality</h3>
                    <p class="text-gray-600">We only stock products from the most trusted brands in the industry.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-amber-600 text-3xl mb-3"><i class="fas fa-tools"></i></div>
                    <h3 class="font-bold text-lg mb-2">Professional Installation</h3>
                    <p class="text-gray-600">Professional installation services available for all our products.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="text-amber-600 text-3xl mb-3"><i class="fas fa-headset"></i></div>
                    <h3 class="font-bold text-lg mb-2">Customer Support</h3>
                    <p class="text-gray-600">Our dedicated support team is here for you 24/7.</p>
                </div>
            </div>

            <div class="bg-gray-50 p-8 rounded-lg mt-12">
                <h3 class="text-2xl font-bold text-center mb-4">Our Team</h3>
                <p class="text-center text-gray-600">
                    We're a passionate team of car audio enthusiasts dedicated to helping you achieve the perfect sound.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
