<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('is_best_seller', true)->take(3)->get();
        
        return view('home', compact('featuredProducts'));
    }
}