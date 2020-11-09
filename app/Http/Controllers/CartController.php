<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        session_start();
        $carts = Cart::where('sid', session_id())->where('status', 0)->get();
        return view('cart', ['carts' => $carts]);
    }

    public function update(Request $request, $id){
        $cart = Cart::find($id);

        $cart->amount = $request->amount;

        $cart->update();
        return redirect('/cart')->with('msg', 'Cart Updated');
    }

    public function delete($id){
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/cart')->with('msg', 'Cart option deleted');
    }
}
