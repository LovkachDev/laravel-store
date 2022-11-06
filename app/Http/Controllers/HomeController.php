<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function product(Product $product){
        return view('product', compact('product'));
    }

    public function addProducts(){
        $prodArr = [
            'title' => 'Супер софт от комаров',
            'description' => 'блаблаблаблабла',
            'image' => 'someimg.png',
            'price' => 10
        ];
        Product::create($prodArr);
        return redirect()->route('index');
    }
}
