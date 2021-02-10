<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    public function index(Request $request)
    {
        // category
        // type
        // page
        // avail (in stock, out of stock)
        // min price
        // max price
        $categories = Category::where('parent_id', null)->get();
        $productsDiscount = Product::where('type', 3)->latest()->limit(5)->get();

        $category = null;
        $products = null;
        $minPrice = 0;
        $maxPrice = 0;
        
        if ($request->category) {
            $category = Category::getCategoryBySlug($request->category);
            $products = $category->productsAll();
        } else {
            $products = Product::where('id', '>', 0);
        }
        
        $paginate = 20;

        if ($request->status == 'in_stock') {
            $products = $products->where('quantity', '>', 0);
        }
        
        $minPrice = $products->min('price');
        $maxPrice = $products->max('price');

        if ($request->method() == 'POST') {
            $min = $request->min_price;
            $max = $request->max_price;
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
        $products = $products->paginate($paginate);

        return view('home.catalogue.index', compact('categories', 'category', 'products', 'minPrice', 'maxPrice', 'productsDiscount'));
    }
}
