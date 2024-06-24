<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontControllers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// tes template
Route::get('tes', function () {
    return view('admin.index');

});

// route admin (backend)
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', function(){
        return view('admin.index');
    });
    // untuk route admin lainnya
});

// ROUTE FRONTEND
Route::get('index', [FrontControllers::class, 'index']);
Route::get('contact', [FrontControllers::class, 'contact']);
Route::get('shop', [FrontControllers::class, 'shop']);
Route::get('cart', [FrontControllers::class, 'cart']);
Route::get('checkout', [FrontControllers::class, 'checkout']);
Route::get('produktract', [FrontControllers::class, 'produktract']);
Route::get('about', [FrontControllers::class, 'about']);
Route::get('shopdetails', [FrontControllers::class, 'shopdetails']);


