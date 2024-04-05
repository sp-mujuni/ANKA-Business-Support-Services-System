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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix'=>'home'], function(){
    Route::get('/', 'App\Http\Controllers\ProductsController@index')->name('home');
    Route::get('/cart', 'App\Http\Controllers\CartController@index')->name('list_cart');
    Route::resource('/participants', '\App\Http\Controllers\Customers\ParticipantsController', ['as'=>'participants']);
    Route::resource('/products', '\App\Http\Controllers\Customers\ProductsController', ['as'=>'products']);
});

Route::group(['prefix'=>'admin'], function(){
    Route::resource('/', 'App\Http\Controllers\Admin\DashboardController', ['as'=>'adminhome']);
    Route::resource('/sales', 'App\Http\Controllers\Admin\SalesController', ['as'=>'adminsales']);
    Route::resource('/points', 'App\Http\Controllers\Admin\PointsController', ['as'=>'adminpoints']);
    Route::resource('/customers', 'App\Http\Controllers\Admin\CustomersController', ['as'=>'admincustomers']);
    Route::resource('/products', 'App\Http\Controllers\Admin\ProductsController', ['as'=>'adminproducts']);
}); 
