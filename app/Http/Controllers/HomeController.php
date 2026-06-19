<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Get featured products (limit to 4)
        $featuredProducts = Product::with(['category', 'brand'])
            ->active()
            ->featured()
            ->inStock()
            ->limit(4)
            ->get();

        // If no featured products, get any active products
        if ($featuredProducts->isEmpty()) {
            $featuredProducts = Product::with(['category', 'brand'])
                ->active()
                ->inStock()
                ->limit(4)
                ->get();
        }

        // Get all active categories with product count
        $categories = Category::withCount('products')
            ->where('is_active', true)
            ->get();

        // Get all active brands with product count
        $brands = Brand::withCount('products')
            ->where('is_active', true)
            ->get();

        // Count statistics
        $totalProducts = Product::active()->count();
        $totalBrands = Brand::where('is_active', true)->count();
        $totalCustomers = '1000+'; // You can replace this with actual customer count if you have a customers table

        return view('home', compact(
            'featuredProducts',
            'categories',
            'brands',
            'totalProducts',
            'totalBrands',
            'totalCustomers'
        ));
    }
}
