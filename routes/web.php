<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('product/{product}', [\App\Http\Controllers\HomeController::class, 'product'])->name('product');
Route::get('buy/{product}', [\App\Http\Controllers\HomeController::class, 'product'])->name('product');
//Route::get('/create', [\App\Http\Controllers\HomeController::class, 'addProducts'])->name('add');

Route::middleware('admin')->group(function(){
    Route::prefix('admin')->group(function () {
        Route::get('login', [\App\Http\Controllers\admin\AdminController::class, 'loginFrontend'])->name('admin.login')->withoutMiddleware('admin');
        Route::post('login', [\App\Http\Controllers\admin\AdminController::class, 'loginBackend'])->withoutMiddleware('admin');

        Route::get('main', [\App\Http\Controllers\admin\AdminController::class, 'main'])->name('admin.main');

        Route::get('create', [\App\Http\Controllers\admin\createProductController::class, 'createFrontend'])->name('admin.create.view');
        Route::post('create', [\App\Http\Controllers\admin\createProductController::class, 'createBackend'])->name('admin.create');

        Route::get('add/goods', [\App\Http\Controllers\admin\createGoodsController::class, 'view'])->name('admin.goods.view');
        Route::post('add/create', [\App\Http\Controllers\admin\createGoodsController::class, 'addGoods'])->name('admin.goods');

        Route::get('edit/{product}', [\App\Http\Controllers\admin\updateProductController::class, 'updateFrontend'])->name('admin.edit.view');
        Route::patch('update/{product}', [\App\Http\Controllers\admin\updateProductController::class, 'updateBackend'])->name('admin.update');

        Route::get('delete/{product}', [\App\Http\Controllers\admin\deleteProductController::class, 'delete'])->name('admin.delete');


        Route::get('main', [\App\Http\Controllers\admin\AdminController::class, 'main'])->name('admin.main');

    });
});
