<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function store(Request $request){
        $cat = new Category();

        $cat->title = $request->title;
        $cat->parent = $request->parent;

        $cat->save();
        return redirect('/admin/category')->with('msg', 'Category Created Successfuly.');

    }

    public function edit($id){
        $cat = Category::find($id);
        $cats = Category::all();
        return view('admin.edit_category', ['cate' => $cat, 'cats' => $cats]);
    }

    public function update(Request $request, $id){
        $cat = Category::find($id);

        $cat->title = $request->title;
        $cat->parent = $request->parent;

        $cat->update();
        return redirect('/admin/category')->with('msg', 'category edited successfuly.');
    }

    public function delete($id){
        $cat = Category::find($id);
        $cat->delete();
        return redirect('/admin/category')->with('msg', 'Category deleted successfuly.');
    }
}
