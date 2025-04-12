<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        $bestSellers = Product::where('is_best_seller', true)->get();
        
        return view('menu', compact('categories', 'bestSellers'));
    }
    
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products;
        
        return view('category', compact('category', 'products'));
    }
    
    public function product($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        return view('product', compact('product'));
    }
}