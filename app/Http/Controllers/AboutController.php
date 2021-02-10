<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        return view('home.about.index', compact('categories'));
    }
}
