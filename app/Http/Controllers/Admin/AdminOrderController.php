<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $ordersType = null;
        return view('admin.orders.index', compact('ordersType'));
    }

    public function show($id)
    {
        return view('admin.orders.show');
    }

    public function delete($id)
    {
        dd($id);
    }
}
