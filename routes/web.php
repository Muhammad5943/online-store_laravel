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

Route::get('/', 'Utama@index');
Route::post('/pushData', 'Utama@store');
Route::get('/login', 'Login@index');
Route::post('/register', 'Login@register');
Route::post('/enter', 'Login@enter');
Route::get('/logout', 'Login@logout');
Route::post('/addcart', 'Order@order');
Route::get('/keranjang', 'Order@keranjang');
Route::get('/checkout', 'Order@checkout');
Route::get('/checkout_list', 'Order@checkout_list');
Route::get('/confirm', 'Order@confirm');
Route::post('/confirm_save', 'Order@confirm_save');