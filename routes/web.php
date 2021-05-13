<?php

use Illuminate\Http\Request;
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


Route::get('/products/{product}', function ($product) {
    return view('product',["product"=>$product]);

})->name("products.detail");

Route::get('/login', function () {
  
    return view('login');

})->name("login");

Route::get('/register', function () {
  
    return view('register');

})->name("register");


Route::get('/checkout', function () {
  
    return view('checkout');

})->name("checkout");


Route::get('/cart', function () {
  
    return view('cart');

})->name("cart");



Route::get('/products', function (Request $category) {
    return view('products',["category"=>$category->query('category')]);
})->name('products.category');
