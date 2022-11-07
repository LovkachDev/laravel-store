<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class updateProductController extends Controller
{
    public function updateFrontend(Product $product){
        return view('admin.edit', compact('product'));
    }
    public function updateBackend(Product $product){
        $data = request()->validate([
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:10000',
            'image' => 'required|string|max:1000',
            'price' => 'required|string|max:25'
        ]);
        $product->update($data);
        return redirect()->route('admin.main');
    }
}
