<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBannerController extends Controller
{
    public function index()
    {
        return view('admin.banners.index');
    }
}
