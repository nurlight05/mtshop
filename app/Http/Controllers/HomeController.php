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
        return view('home.main.index', compact('slides', 'banners1', 'banners2'));
    }
}
