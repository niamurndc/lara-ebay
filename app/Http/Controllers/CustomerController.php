<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function checkout(){
        session_start();
        $carts = Cart::where('sid', session_id())->where('status', 0)->get();
        foreach($carts as $cart){
            $cart->user = Auth::user()->id;
            $cart->update();
        }
        return view('checkout', ['carts' => $carts]);
    }

    public function profile(){
        return view('profile');
    }

    public function editprofile(Request $re){
        $customer = User::find(Auth::user()->id);
        $customer->name = $re->name == '' ? $customer->name : $re->name;
        $customer->password = $re->password == '' ? $customer->password : Hash::make($re->password);

        $customer->update();

        return redirect('/profile');
    }

    public function order(){
        $email = Auth::user()->email;
        $order = Order::where('email', $email)->orderBy('id', 'desc')->get();
        return view('order', ['orders' => $order]);
    }

    public function addorder(Request $request)
    {
        $order = new Order();

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->area = $request->area;
        $order->address = $request->address;
        $order->total = $request->total;
        $order->status = 1;

        $order->save();

        $email = Auth::user()->email;
        $second = $order = Order::where('email', $email)->orderBy('id', 'desc')->first();

        $second->id;
        session_start();
        $carts = Cart::where('sid', session_id())->where('status', 0)->get();
        foreach($carts as $cart){
            $cart->order_id = $second->id;
            $cart->status = 1;
            $cart->update();
        }
        return redirect('/home')->with('msg', 'Your order sent successfuly.');
    }
}
