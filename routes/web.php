<?php

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




//Route::get('/', 'Master\kelasControl@sendWA');

//Login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Auth::routes();

Route::get('/', function () {
    return view('/umum/welcome');
});



Route::group(['middleware' => 'auth'], function () {

    Route::get('/admin', function () {
        return view('/admin/menuawal');
    })->name('admin');

    Route::get('/snack', function () {
        return view('/admin/master/datasnack');
    })->name('snack');
});


Auth::routes();

Route::get('/produk', function () {
    return view('/umum/produk');
})->name('produk');

Route::get('/home', 'HomeController@index')->name('home');
