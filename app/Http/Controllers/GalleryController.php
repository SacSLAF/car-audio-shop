<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $query = Gallery::active();

        // Filter by category
        if ($request->category && $request->category !== 'all') {
            $query->where('category', $request->category);
        }

        // Filter by type
        if ($request->type && $request->type !== 'all') {
            $query->where('type', $request->type);
        }

        $galleryItems = $query->orderBy('order', 'asc')
            ->orderBy('created_at', 'desc')
            ->paginate(12);

        // Get featured items for stats
        $featuredItems = Gallery::active()->featured()->count();
        $totalItems = Gallery::active()->count();

        return view('gallery', compact('galleryItems', 'featuredItems', 'totalItems'));
    }

    public function show($slug)
    {
        $item = Gallery::where('slug', $slug)
            ->where('is_active', true)
            ->firstOrFail();

        // Increment views
        $item->increment('views');

        return view('gallery.show', compact('item'));
    }
}
