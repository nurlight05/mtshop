<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
        $productsType = null;
        if ($request->has('type')) {
            if ($request->type == 'hit')
                $productsType = 'Хиты продаж';
            if ($request->type == 'new')
                $productsType = 'Новые товары';
            if ($request->type == 'dis')
                $productsType = 'По акции';
        }

        return view('admin.products.index', compact('productsType'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function show($slug)
    {
        return view('admin.products.show');
    }

    public function edit($slug)
    {
        return view('admin.products.edit');
    }

    public function update(Request $request, $slug)
    {
        dd($request);
    }

    public function delete($slug)
    {
        dd($slug);
    }

    public function submit(Request $request)
    {
        dd($request);
    }
}
