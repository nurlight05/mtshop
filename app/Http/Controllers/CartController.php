<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        return view('home.cart.index', compact('categories'));
    }
}
