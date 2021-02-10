<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Banner::where('order', 1)->get();
        $banners1 = Banner::where('order', 2)->get();
        $banners2 = Banner::where('order', 3)->get();
        $categories = Category::where('parent_id', null)->get();
        $productsNew = Product::where('type', 1)->latest()->limit(4)->get();
        $productsHit = Product::where('type', 2)->latest()->limit(10)->get();
        $productsDiscount = Product::where('type', 3)->latest()->limit(5)->get();
        return view('home.main.index', compact('slides', 'banners1', 'banners2', 'categories', 'productsNew', 'productsHit', 'productsDiscount'));
    }
}
