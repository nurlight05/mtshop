<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Throwable;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $ordersType = $request->type;

        $orders = Order::where('id', '>', 0);

        if ($ordersType == 'new') {
            $orders = $orders->whereDate('created_at', Carbon::today())->orWhere('paid', 0);
            $ordersType = 'Новые заказы';
        }

        $orders = $orders->orderByDesc('created_at')->get();

        return view('admin.orders.index', compact('ordersType', 'orders'));
    }

    public function show(Order $order)
    {
        return view('admin.orders.show', compact('order'));
    }

    public function delete(Order $order)
    {
        Order::destroy($order->id);
        return redirect()->route('mtshop.admin.orders')->withSuccess('Заказ успешно удален!');
    }

    public function checkAsPaid(Order $order)
    {
        $order->paid = 1;
        $order->save();
        
        return redirect()->route('mtshop.admin.orders')->withSuccess('Данные заказа успешно изменены!');
    }

    public function submit(Request $request)
    {
        if ($request['products'] == null)
            return back()->withErrors('Ничего не выбрано!');

        switch ($request->action) {
            case 'delete':
                $orders = Order::whereIn('id', $request['orders'])->get();
                try {
                    foreach ($orders as $order) {
                        $order->delete();
                    }
                    return redirect()->route('mtshop.admin.orders')->withSuccess('Отмеченные заказы успешно удалены!');
                } catch (Throwable $th) {
                    return back()->withErrors('Невозможно удалить некоторые заказы!');
                }
                break;

            case 'check-as-paid':
                $orders = Order::whereIn('id', $request['orders'])->get();
                foreach ($orders as $order) {
                    $order->paid = 1;
                    $order->save();
                }
                return redirect()->route('mtshop.admin.orders')->withSuccess('Заказы успешно отмечены оплаченными!');
                break;
            
            default:
                return back()->withErrors('Действие не определено!');
                break;
        }
    }
}
