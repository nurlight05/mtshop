<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $totalProducts = Product::all()->count();
        $totalCategories = Category::all()->count();
        // $totalOrders = Product::all()->count();
        return view('admin.main.index', compact('totalProducts', 'totalCategories'));
    }

    public function profile()
    {
        return view('admin.profile.index');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $password = Hash::make($request->passwordNew);

        if (Hash::check($request->password, $user->password)) {
            if ($request->passwordNew != null)
                $user->password = $password;
            $user->save();
            return redirect()->route('mtshop.admin.profile')->withSuccess('Данные админа успешно изменены!');
        } else {
            return back()->withInput()->withErrors('Неправильный пароль!');
        }
    }
}
