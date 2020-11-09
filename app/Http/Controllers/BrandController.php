<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function store(Request $request){
        $brand = new Brand();

        $brand->title = $request->title;

        $brand->save();
        return redirect('/admin/brand')->with('msg', 'Brand Created Successfuly.');

    }

    public function edit($id){
        $brand = Brand::find($id);
        return view('admin.edit_brand', ['brand' => $brand]);
    }

    public function update(Request $request, $id){
        $brand = Brand::find($id);

        $brand->title = $request->title;

        $brand->update();
        return redirect('/admin/brand')->with('msg', 'Brand edited successfuly.');
    }

    public function delete($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/admin/brand')->with('msg', 'Brand deleted successfuly.');
    }
}
