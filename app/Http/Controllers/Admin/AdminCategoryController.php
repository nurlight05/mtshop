<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Category;
use App\Models\Attribute;
use Throwable;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function show($slug)
    {
        return view('admin.categories.show');
    }

    public function create()
    {
        $categories = Category::where('parent_id', null)->get();
        $attributes = Attribute::with('measure')->get();
        return view('admin.categories.create', compact('categories', 'attributes'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $slug = Helper::getSlug($name);
        $parent_id = $request->parent;
        
        $category = new Category;
        $category->name = $name;
        $category->slug = $slug;

        if ($parent_id != null)
            $category->parent_id = $parent_id;

        try {
            $category->save();
        } catch (Throwable $th) {
            return back()->withInput()->withErrors('Категория с таким названием существует!');
        }

        if ($request['attributes'] != null)
            $category->attributes()->sync($request['attributes']);

        return redirect()->route('mtshop.admin.categories')->withSuccess('Категория успешно создана!');
    }

    public function edit($slug)
    {
        $category = Category::getCategoryBySlug($slug);
        $categories = Category::where('parent_id', null)->get();
        $attributes = Attribute::all();
        return view('admin.categories.edit', compact('category', 'categories', 'attributes'));
    }

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->name = $request->name;
        
        if ($request->parent != $request->parentOld) {
            if ($category->childs->count() > 0) {
                return back()->withInput()->withErrors('Данная категория имеет подкатегории!');
            } else {
                if ($request->parent == 'null')
                    $category->parent_id = null;
                else
                    $category->parent_id = $request->parent;
            }
        }

        try {
            $category->save();
        } catch (Throwable $th) {
            return back()->withInput()->withErrors('Категория с таким названием существует!');
        }

        $category->slug = Helper::getSlug($request->name);
        $category->save();

        if ($request['attributes'] != null)
            $category->attributes()->sync($request['attributes']);
        else
            $category->attributes()->detach();

        return redirect()->route('mtshop.admin.categories')->withSuccess('Категория успешно изменена!');
    }

    public function delete(Category $category)
    {
        if ($category->products->count() > 0)
            return back()->withErrors('Это категория имеет товары внутри!');

        if ($category->childs->count() > 0)
            return back()->withErrors('Это категория имеет подкатегории внутри!');
        
        $name = $category->name;
        $category->delete();
        return redirect()->route('mtshop.admin.categories')->withSuccess('Категория ' . $name . ' успешно удалена!');
    }

    public function submit(Request $request)
    {
        if ($request['categories'] == null)
            return back()->withErrors('Ничего не выбрано!');

        switch ($request->action) {
            case 'delete':
                try {
                    $categories = Category::whereIn('id', $request['categories'])->get();
                    foreach ($categories as $item) {
                        if ($item->products->count() > 0)
                            return back()->withErrors('Категория ' . $item->name . ' имеет товары внутри!');
                    }
                    foreach ($categories as $item) {
                        if ($item->childs->count() > 0)
                            return back()->withErrors('Категория ' . $item->name . ' имеет подкатегории внутри!');
                    }
                    foreach ($categories as $item) {
                        $item->delete();
                    }
                } catch (Throwable $th) {
                    return back()->withErrors('Невозможно удалить категорию!');
                }
                return redirect()->route('mtshop.admin.categories')->withSuccess('Выбранные категории успешно удалены!');
                break;
            
            default:
                return back()->withErrors('Действие не определено!');
                break;
        }
    }

    public function getAttributes(Request $request) {
        $category = Category::find($request->id);
        return $category->attributes->load('measure');
    }
}
