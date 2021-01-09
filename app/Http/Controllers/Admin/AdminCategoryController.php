<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    public function show($slug)
    {
        return view('admin.categories.show');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        dd($request);
    }

    public function edit($slug)
    {
        return view('admin.categories.edit');
    }

    public function update(Request $request, $slug)
    {
        dd($slug);
    }

    public function delete($slug)
    {
        dd($slug);
    }
}
