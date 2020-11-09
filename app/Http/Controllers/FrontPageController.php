<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index(){
        $product = Product::all();
        $cats = Category::where('parent', 0)->get();
        return view('welcome', ['products' => $product, 'cats' => $cats]);
    }

    public function shop(){
        $product = Product::all();
        $cats = Category::where('parent', 0)->get();
        return view('shop', ['products' => $product, 'cats' => $cats]);
    }

    public function search(){
        $key = $_GET['key'];

        $product = Product::where('title', 'LIKE', '%'.$key.'%')->get();
        $cats = Category::where('parent', 0)->get();
        return view('shop', ['products' => $product, 'cats' => $cats]);
    }

    public function single($id){
        $product = Product::find($id);
        $products = Product::where('category_id', $product->category_id)->get();
        $cats = Category::where('parent', 0)->get();
        return view('single', ['product' => $product, 'products' => $products, 'cats' => $cats]);
    }

    public function addcart($id){
        session_start();
        $cart = new Cart();

        $cart->product_id = $id;
        $cart->amount = 1;
        $cart->sid = session_id();
        $cart->status = 0;

        $cart->save();
        return redirect()->back();
    }
}
