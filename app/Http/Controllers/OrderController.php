<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = collect(session('products'));
        
        $order = new Order;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        if ($request->delivery_price)
            $order->delivery_price = $request->delivery_price;
        $order->city = $request->city;
        $order->street = $request->street;
        $order->apartment = $request->apartment;

        $products = session('products');
        $quantity = $request['quantity'];

        $order->save();

        $productsArray = [];

        foreach ($products as $index => $product) {
            $price = 0;
            if ($product->discount)
                $price = $product->discount_price * $quantity[$index];
            else
                $price = $product->price * $quantity[$index];

            $productsArray[$product->id] = ['quantity' => $quantity[$index], 'price' => $price];
        }

        $order->products()->sync($productsArray);
        session()->forget('products');
        return redirect()->route('mtshop.cart.index', ['#success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
