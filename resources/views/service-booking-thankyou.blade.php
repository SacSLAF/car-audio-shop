@extends('layouts.app')

@section('title', 'Thank You - CarAudio Shop')

@section('content')
    <div class="container mx-auto px-4 py-20">
        <div class="max-w-2xl mx-auto text-center">
            <div class="bg-green-100 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check-circle text-green-600 text-5xl"></i>
            </div>
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Thank You!</h1>
            <p class="text-xl text-gray-600 mb-6">
                Your service request has been submitted successfully.
            </p>
            <p class="text-gray-600 mb-8">
                We'll contact you within 24 hours to confirm your booking.
            </p>

            @if (session('whatsapp_url'))
                <div class="bg-amber-50 border border-amber-200 rounded-xl p-6 mb-8">
                    <p class="text-gray-700 mb-4">
                        <i class="fas fa-whatsapp text-green-600 text-2xl mr-2"></i>
                        Contact us directly on WhatsApp for faster response:
                    </p>
                    <a href="{{ session('whatsapp_url') }}" target="_blank"
                        class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold px-8 py-4 rounded-lg transition transform hover:scale-[1.02] shadow-lg">
                        <i class="fab fa-whatsapp mr-2"></i>
                        Message Admin on WhatsApp
                    </a>
                </div>
            @endif

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/"
                    class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-3 rounded-lg font-bold transition">
                    <i class="fas fa-home mr-2"></i> Go Home
                </a>
                <a href="/services"
                    class="border-2 border-amber-600 text-amber-600 hover:bg-amber-600 hover:text-white px-8 py-3 rounded-lg font-bold transition">
                    <i class="fas fa-tools mr-2"></i> View Services
                </a>
            </div>
        </div>
    </div>
@endsection
