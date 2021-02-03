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
Route::get('/login', 'LoginController@index');
Route::post('/proses_login', 'LoginController@proses_login');
Route::get('/register', 'LoginController@register');
Route::post('/proses_register', 'LoginController@proses_register');
Route::get('/', 'HomeController@index');
Route::get('/logout', 'LoginController@logout');
//Route Product
Route::get('/product', 'ProdukController@index');

Route::group(['middleware' => ['auth', 'level:penjual']], function () {
    Route::get('/penjual', 'PenjualController@index');
    Route::get('/show', 'ProdukController@show');
    Route::get('/add_product', 'ProdukController@create');
    Route::post('/add_product', 'ProdukController@store');
    Route::get('/product_delete/{id}', 'ProdukController@destroy');
    Route::get('/kategori', 'CategoryController@index');
    Route::get('/add_category', 'CategoryController@create');
    Route::post('/add_category', 'CategoryController@store');
    Route::get('/category_update/{id}', 'CategoryController@edit');
    Route::put('/category_update/{id}', 'CategoryController@update');
    Route::get('/category_delete/{id}', 'CategoryController@destroy');
});

Route::group(['middleware' => ['auth','level:pembeli']], function () {
    Route::get('/pembeli', 'PembeliController@index');
});

