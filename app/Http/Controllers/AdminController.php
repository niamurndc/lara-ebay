<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        $data = $request->only('email', 'password');
        
        if(Auth::guard('admin')->attempt($data, $request->remember)){
            $user = Admin::where('email', $request->email)->first();
            Auth::guard('admin')->login($user);
            return redirect('/admin/home');
        }

        return redirect('/admin/login');

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    public function update(Request $request, $id){
        $admin = Admin::find($id);

        $admin->name = $request->name == null ? $admin->name : $request->name;
        $admin->password = $request->password == null ? $admin->password : $request->password;

        $admin->update();
        return redirect('/admin/profile')->with('msg', 'Profile Updated Successfuly');
    }
}
