@extends('layouts.app')

@section('title', 'Gallery - CarAudio Shop')

@section('content')
<div class="container mx-auto px-4 py-16">
    <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Our Gallery</h1>
        <p class="text-gray-600 text-lg">View our work and installations</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @for($i = 1; $i <= 12; $i++)
        <div class="relative group overflow-hidden rounded-lg aspect-square bg-gray-200">
            <div class="absolute inset-0 bg-gray-200 animate-pulse"></div>
            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-50 transition flex items-center justify-center">
                <i class="fas fa-search-plus text-white text-2xl"></i>
            </div>
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-4 opacity-0 group-hover:opacity-100 transition">
                <p class="text-white font-semibold">Installation {{ $i }}</p>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
