<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Support\Facades\Storage;
use Throwable;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        $query = "";
        $productsType = null;
        $products = Product::where('id', '>', 0);
        $categories = Category::all();

        if ($request->has('type')) {
            if ($request->type == 'new') {
                $productsType = 'Новые товары';
                $products = Product::where('type', 1);
            }
            if ($request->type == 'hit') {
                $productsType = 'Хиты продаж';
                $products = Product::where('type', 2);
            }
            if ($request->type == 'dis') {
                $productsType = 'По акции';
                $products = Product::where('type', 3);
            }
        }

        if ($request->has('query')) {
            $query = $request->get('query');
            $products = $products->where('name', 'LIKE', '%'.$query.'%')->orWhere('vcode', 'LIKE', '%'.$query.'%');
        }

        $products = $products->orderByDesc('created_at')->paginate(30)->onEachSide(3);

        return view('admin.products.index', compact('products', 'productsType', 'categories'));
    }

    public function create()
    {
        $attributesAll = Attribute::all();
        $categories = Category::where('parent_id', null)->get();
        return view('admin.products.create', compact('categories', 'attributesAll'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $slug = Helper::getSlug($name);
        $slugTemp = $slug;
        $next = 2;
        while (Product::where('slug', $slugTemp)->first()) {
            $slugTemp = $slug . '-' . $next;
            $next++;
        }
        $slug = $slugTemp;

        $vcode = $request->vcode;

        $countVcode = Product::where('vcode', $vcode)->count();
        if ($countVcode > 0)
            return redirect()->route('mtshop.admin.products.create')->withErrors('Товар с таким артикулом существует!');

        $category_id = $request->category;
        $description = $request->description;
        $price = $request->price;
        $type = intval($request->type);
        $discount = $request->discount;
        $images = $request->file('images');

        if ($discount == 'null')
            $discount = null;

        $quantity = $request->quantity;
        $attributesArr = $request['attributes'];
        $valuesArr = $request['values'];
        $attributes = [];

        $product = new Product;
        $product->name = $name;
        $product->slug = $slug;
        $product->category_id = $category_id;
        $product->vcode = $vcode;
        $product->description = $description;
        $product->price = $price;
        $product->type = $type;
        $product->discount = $discount;
        $product->quantity = $quantity;

        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $format = $image->extension();
                if (strtoupper($format) == 'GIF' OR strtoupper($format) =='JPEG' OR strtoupper($format) == 'PNG' OR strtoupper($format) == 'WebP' OR strtoupper($format) == 'SVG' OR strtoupper($format) == 'JPG') {
                    // Nothing
                } else {
                    return redirect()->route('mtshop.admin.products.create')->withErrors('Допустимые расширения картинок: JPEG, PNG, WebP, SVG, JPG');
                }
            }
            $product->save();
            foreach ($images as $item) {
                $path = $item->store("assets/home/img/products",['disk' => 'public']);
                $imgPath = '/' . $path;
                $image = new Image(['url' => $imgPath]);
                $product->images()->save($image);
            }
        } else {
            $product->save();
        }

        if ($attributesArr != null) {
            foreach ($attributesArr as $key => $value) {
                $valuesKeys = array_keys($valuesArr);
                $valuesValue = $valuesArr[$valuesKeys[$key]];
                if ($valuesValue != null)
                    $attributes[$value] = ['value' => $valuesValue]; 
            }
            $product->attributes()->sync($attributes);
        } else {
            $product->attributes()->detach();
        }

        return redirect()->route('mtshop.admin.products')->withSuccess('Товар успешно добавлен!');
    }

    public function show($slug)
    {
        $product = Product::getProductBySlug($slug);
        return view('admin.products.show', compact('product'));
    }

    public function edit($slug)
    {
        $attributesAll = Attribute::all();
        $product = Product::getProductBySlug($slug);
        $categories = Category::where('parent_id', null)->get();
        return view('admin.products.edit', compact('product', 'categories', 'attributesAll'));
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);

        $name = $request->name;
        $slug = Helper::getSlug($name);

        if ($slug != $request->slug) {
            $slugTemp = $slug;
            $next = 2;
            while (Product::where('slug', $slugTemp)->first()) {
                $slugTemp = $slug . '-' . $next;
                $next++;
            }
            $slug = $slugTemp;
        }

        $vcode = $request->vcode;

        try {
            $product->vcode = $vcode;
            $product->save();
        } catch (Throwable $th) {
            return redirect()->route('mtshop.admin.products.edit', ['slug' => $product->slug])->withErrors('Товар с таким артикулом существует!');
        }   

        $category_id = $request->category;
        $description = $request->description;
        $price = $request->price;
        $type = intval($request->type);
        $discount = $request->discount;
        $images = $request->file('images');

        if ($discount == 'null')
            $discount = null;

        $quantity = $request->quantity;
        $attributesArr = $request['attributes'];
        $valuesArr = $request['values'];
        $attributes = [];

        $product->name = $name;
        $product->slug = $slug;
        $product->category_id = $category_id;
        // $product->vcode = $vcode;
        $product->description = $description;
        $product->price = $price;
        $product->type = $type;
        $product->discount = $discount;
        $product->quantity = $quantity;

        if ($request->hasFile('images')) {
            foreach ($images as $image) {
                $format = $image->extension();
                if (strtoupper($format) == 'GIF' OR strtoupper($format) =='JPEG' OR strtoupper($format) == 'PNG' OR strtoupper($format) == 'WebP' OR strtoupper($format) == 'SVG' OR strtoupper($format) == 'JPG') {
                    // Nothing
                } else {
                    return redirect()->route('mtshop.admin.products.create')->withErrors('Допустимые расширения картинок: JPEG, PNG, WebP, SVG, JPG');
                }
            }
            $product->save();
            foreach ($images as $item) {
                $path = $item->store("assets/home/img/products",['disk' => 'public']);
                $imgPath = '/' . $path;
                $image = new Image(['url' => $imgPath]);
                $product->images()->save($image);
            }
        } else {
            $product->save();
        }

        if ($attributesArr != null) {
            foreach ($attributesArr as $key => $value) {
                $valuesKeys = array_keys($valuesArr);
                $valuesValue = $valuesArr[$valuesKeys[$key]];
                if ($valuesValue != null)
                    $attributes[$value] = ['value' => $valuesValue]; 
            }
            $product->attributes()->sync($attributes);
        } else {
            $product->attributes()->detach();
        }

        return redirect()->route('mtshop.admin.products.show', ['slug' => $product->slug])->withSuccess('Товар успешно обновлен!');
    }

    public function delete(Product $product)
    {
        if ($product->orders()->exists())
            return back()->withErrors('Товар имеется в данных некоторых заказов!');
            
        $product->images()->delete();
        $product->delete();
        
        return redirect()->route('mtshop.admin.products')->withSuccess('Данный товар успешно удален!');
    }

    public function submit(Request $request)
    {
        if ($request['products'] == null)
            return back()->withErrors('Ничего не выбрано!');

        switch ($request->action) {
            case 'move-to-hit':
                try {
                    $products = Product::whereIn('id', $request['products'])->get();
                    foreach ($products as $product) {
                        $product->type = 2;
                        $product->discount = null;
                        $product->save();
                    }
                } catch (Throwable $th) {
                    return back()->withErrors('Произошла ошибка!');
                }
                return redirect()->route('mtshop.admin.products')->withSuccess('Выбранные товары успешно перемещены в Хит товары!');
                break;
            
            case 'move-to-new':
                try {
                    $products = Product::whereIn('id', $request['products'])->get();
                    foreach ($products as $product) {
                        $product->type = 1;
                        $product->discount = null;
                        $product->save();
                    }
                } catch (Throwable $th) {
                    return back()->withErrors('Произошла ошибка!');
                }
                return redirect()->route('mtshop.admin.products')->withSuccess('Выбранные товары успешно перемещены в Новые товары!');
                break;

            case 'change-category':
                try {
                    $products = Product::whereIn('id', $request['products'])->get();
                    foreach ($products as $product) {
                        $product->category_id = $request->category;
                        $product->save();
                    }
                } catch (Throwable $th) {
                    return back()->withErrors('Произошла ошибка!');
                }
                $category = Category::find($request->category);
                return redirect()->route('mtshop.admin.products')->withSuccess('Выбранные товары успешно перемещены в категорию ' . $category->name . '!');
                break;

            case 'delete':
                try {
                    $products = Product::whereIn('id', $request['products'])->get();
                    foreach ($products as $product) {
                        if ($product->orders()->exists())
                            return back()->withErrors('Некоторые товары имеется в данные некоторых заказов!');
                    }
                    foreach ($products as $product) {
                        if ($product->images()->exists())
                            $product->images()->delete();
                        $product->delete();
                    }
                    return redirect()->route('mtshop.admin.products')->withSuccess('Выбранные товары успешно удалены!');
                } catch (Throwable $th) {
                    return back()->withErrors('Некоторые товары имеется в данные некоторых заказов!');
                }
                break;

            default:
                return back()->withErrors('Действие не определено!');
                break;
        }
    }

    public function deleteImage($id)
    {
        $image = Image::find($id);
        if (Storage::disk('public')->exists($image->url)) {
            Storage::disk('public')->delete($image->url);
        }
        $image->delete();
        return redirect()->back()->withSuccess('Картинка успешно удалена!');
    }
}
