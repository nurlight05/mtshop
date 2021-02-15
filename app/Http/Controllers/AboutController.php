<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $category = null;
        $minPrice = 0;
        $maxPrice = 0;
        $curMinPrice = null;
        $curMaxPrice = null;
        $categories = Category::where('parent_id', null)->get();
        return view('home.about.index', compact('categories', 'category', 'minPrice', 'maxPrice', 'curMinPrice', 'curMaxPrice'));
    }
}
