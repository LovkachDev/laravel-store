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
//Route::get('/create', [\App\Http\Controllers\HomeController::class, 'addProducts'])->name('add');


Route::middleware('admin')->group(function(){
    Route::prefix('admin')->group(function () {
        Route::get('login', [\App\Http\Controllers\admin\AdminController::class, 'loginFrontend'])->name('admin.login')->withoutMiddleware('admin');
        Route::post('login', [\App\Http\Controllers\admin\AdminController::class, 'loginBackend'])->withoutMiddleware('admin');

        Route::get('main', [\App\Http\Controllers\admin\AdminController::class, 'main'])->name('admin.main');

        Route::get('create', [\App\Http\Controllers\admin\AdminController::class, 'createFrontend'])->name('admin.create.view');
        Route::post('create', [\App\Http\Controllers\admin\AdminController::class, 'createBackend'])->name('admin.create');
    });
});
