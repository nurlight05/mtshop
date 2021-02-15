<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $paginate = 20;
        $products = Product::where('id', '>', 0);
        $categories = Category::where('parent_id', null)->get();
        $productsDiscount = Product::where('type', 3)->latest()->limit(5)->get();
        $category = null;
        $minPrice = 0;
        $maxPrice = 0;
        $curMinPrice = null;
        $curMaxPrice = null;
        $query = "";

        if ($request->category) {
            $category = Category::getCategoryBySlug($request->category);
            $products = $category->productsAll();
        }

        if ($request->status == 'in_stock') {
            $products = $products->where('quantity', '>', 0);
        }

        $minPrice = $products->min('price');
        $maxPrice = $products->max('price');

        if ($request->method() == 'POST') {
            $min = $request->min_price;
            $max = $request->max_price;
            $curMinPrice = $request->min_price;
            $curMaxPrice = $request->max_price;
            $products = $products->whereBetween('price', [$min, $max]);
        }

        if ($request->type) {
            switch ($request->type) {
                case 'new':
                    $products = $products->where('type', 1);
                    break;
                    
                case 'hit':
                    $products = $products->where('type', 2);
                    break;

                case 'discount':
                    $products = $products->where('type', 3);
                    break;
                
                default:
                    $products = $products;
                    break;
            }
        }

        if ($request->query) {
            $query = $request->get('query');
            $products = $products->where('name', 'LIKE', '%'.$query.'%');
        }

        $products = $products->paginate($paginate);

        return view('home.search.index', compact('categories', 'category', 'products', 'minPrice', 'maxPrice', 'productsDiscount', 'curMinPrice', 'curMaxPrice'));
    }
}
