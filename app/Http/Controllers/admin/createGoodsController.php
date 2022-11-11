<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Good;
use Illuminate\Http\Request;

class createGoodsController extends Controller
{
    public function view(){

        return view('admin.createGoods');
    }
    public function addGoods(){
        $data = request()->validate([
            'product_id' => 'required|integer',
            'goods' => 'required',
            'checkbox' => 'string'
        ]);

        isset($data['checkbox']) ? $data['infinity'] = 1 : $data['infinity'] = 0; // проверка на чекбокс
        unset($data['checkbox']); // Удаляем данные чекбокса,что бы не записывать в базу

        Good::create($data);
        return view('admin.createGoods');
    }
}
