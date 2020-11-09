<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function add(){
        $cats = Category::all();
        $brand = Brand::all();
        return view('admin.add_product', ['cats' => $cats, 'brands' => $brand]);
    }

    public function store(Request $request){
        $product = new Product();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->attr = $request->attr;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->popular = $request->popular;
        $product->offer = $request->offer;
        
        // add image
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();

        $cover = 'product-'.time().'.'.$ext;

        $product->image = $cover;

        $path = 'image';

        $image->move($path, $cover);

        $product->save();
        return redirect('/admin/product')->with('msg', 'Product Created Successfuly.');

    }

    public function edit($id){
        $product = Product::find($id);
        $cats = Category::all();
        $brands = Brand::all();
        return view('admin.edit_product', ['product' => $product, 'cats' => $cats, 'brands' => $brands]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->attr = $request->attr;
        $product->category_id = $request->category;
        $product->brand_id = $request->brand;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        $product->update();
        return redirect('/admin/product')->with('msg', 'Product edited successfuly.');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/product')->with('msg', 'Product deleted successfuly.');
    }
}
