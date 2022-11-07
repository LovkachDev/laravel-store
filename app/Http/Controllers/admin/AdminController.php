<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function loginFrontend(){
//        $data = [
//            'login' => 'login',
//            'password' => Hash::make('password')
//        ];
//        Admin::create($data);
//        return dd($data);
        if(session()->has('admin')){
            return redirect()->route('admin.main');
        }
        return view('admin.login');
    }
    public function loginBackend(Request $request){
        $admin = Admin::firstWhere('login', $request->get('login'));
        if($admin && Hash::check($request->get('password'), $admin->password)){
            session(['admin' => $admin]);
            return redirect()->route('admin.main');
        }

        return redirect()->route('admin.login')->withErrors('Логин или пароль не верный');
    }
    public function main(){
        $products = Product::all();
        $totalProducts = Product::count();
        return view('admin.content', compact('products', 'totalProducts'));
    }
}
