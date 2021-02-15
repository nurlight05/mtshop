<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $category = null;
        $minPrice = 0;
        $maxPrice = 0;
        $curMinPrice = null;
        $curMaxPrice = null;
        $category_id = $product->category->id;
        $similarProducts = Product::where('category_id', $category_id)->limit(10)->get();
        $categories = Category::where('parent_id', null)->get();
        return view('home.products.show', compact('categories', 'product', 'similarProducts', 'category', 'minPrice', 'maxPrice', 'curMinPrice', 'curMaxPrice'));
    }

    public function addToCart(Product $product)
    {
        // session()->forget('products');
        // dd(1);
        if (session()->has('products')) {
            $products = session('products');
            array_push($products, $product);
            session(['products' => $products]);
        } else {
            $products = array();
            array_push($products, $product);
            session(['products' => $products]);
        }
            
        return redirect()->route('mtshop.cart.index');
    }

    public function removeFromCart(Product $product)
    {
        $products = collect(session('products'));
        $products = $products->where('id', '!=', $product->id);
        if ($products->isEmpty())
            session()->forget('products');
        else
            session(['products' => $products]);
        return redirect()->route('mtshop.cart.index');
    }
}
