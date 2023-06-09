<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['prefix' => 'Admin', 'middleware'=> 'auth'], function(){
    Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::view('/Shipping', 'shipping')->name('admin.shipping');
    Route::view('/Discount', 'discount')->name('admin.discount');

    Route::prefix('Products')->group(function () {
        Route::redirect('/', '/Products/List');
        Route::view('List', 'products/list');
        Route::view('Detail', 'products/detail');
    });

    Route::prefix('Orders')->group(function () {
        Route::redirect('/', '/Orders/List');
        Route::view('List', 'orders/list');
        Route::view('Detail', 'orders/detail');
    });

    Route::prefix('Customers')->group(function () {
        Route::redirect('/', '/Customers/List');
        Route::view('List', 'customers/list');
        Route::view('Detail', 'customers/detail');
    });
    
    Route::prefix('Storefront')->group(function () {
        Route::redirect('/', '/Storefront/Home');
        Route::view('Home', 'storefront/home');
        Route::view('Filters', 'storefront/filters');
        Route::view('Categories', 'storefront/categories');
        Route::view('Detail', 'storefront/detail');
        Route::view('Cart', 'storefront/cart');
        Route::view('Checkout', 'storefront/checkout');
        Route::view('Invoice', 'storefront/invoice');
    });

    Route::prefix('Settings')->group(function () {
        Route::view('/', 'settings/index');
        Route::view('General', 'settings/general');
    });

});

Route::match(['get', 'post'], '/Admin', function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard');




/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
|
*/







