<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function product()
    {
        $products = Product::all();
        return view('admin.product', ['products' => $products]);
    }

    public function order()
    {
        $order = Order::all();
        return view('admin.order', ['orders' => $order]);
    }

    public function category()
    {
        $cats = Category::all();
        return view('admin.category', ['cats' => $cats]);
    }

    public function brand()
    {
        $brand = Brand::all();
        return view('admin.brand', ['brands' => $brand]);
    }

    public function customer()
    {
        $users = User::all();
        return view('admin.customer', ['users' => $users]);
    }

    public function delcustomer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/customer')->with('msg', 'Customer Deleted Successfuly.');
    }

    public function setting()
    {
        return view('admin.setting');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
