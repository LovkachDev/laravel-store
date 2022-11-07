<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class createProductController extends Controller
{
    public function createFrontend(){
        return view('admin.create');
    }
    public function createBackend(){
        $data = request()->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:10000',
            'image' => 'required|string|max:1000',
            'price' => 'required|string|max:25'
        ]);
        Product::create($data);
        return redirect()->route('admin.main');
    }
}
