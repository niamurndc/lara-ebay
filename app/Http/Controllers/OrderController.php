<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view($id){
        $order = Order::find($id);
        return view('admin.view_order', ['order' => $order]);
    }

    public function delete($id){
        $order = Order::find($id);
        $order->delete();
        return redirect('/admin/order')->with('msg', 'Order Deleted Successfully');
    }
}
