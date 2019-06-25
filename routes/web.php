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
Auth::routes();

Route::get('/register','Auth\customerController@showRegistrasiForm');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/postlogin', 'Auth\LoginController@postlogin');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');



Route::get('/', function () {
    return view('umum.welcome');
})->name('home');

Route::get('/produk', function () {
    return view('/umum/produk');
})->name('produk');

Route::get('/produkbykategori', function () {
    return view('/umum/produkbykategori');
})->name('produkbykategori');


Route::get('/keranjang', function () {
    return view('/umum/keranjang');
})->name('keranjang');

Route::get('/pembayaran', function () {
    return view('/umum/pembayaran');
})->name('pembayaran');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'admin', 'middleware' => 'hakakses:pimpinan|admin'], function(){
            Route::get('/', function () {
                return view('/admin/menuawal');
            })->name('admin');

            
            Route::group(['prefix' => 'user'], function(){
                // Route::get('/','Master\userController@index')->name('pageuser');
                // Route::get('/dataSatuan','Master\satuanController@getDataSatuan');
                // Route::post('/simpanSatuan','Master\satuanController@insert');
            });

            Route::group(['prefix' => 'customer'], function(){
                // Route::get('/','Master\userController@index')->name('pagecustomer');
                // Route::get('/dataSatuan','Master\satuanController@getDataSatuan');
                // Route::post('/simpanSatuan','Master\satuanController@insert');
            });

            Route::group(['prefix' => 'satuan'], function(){
                Route::get('/','Master\satuanController@index')->name('adminSatuan');
                Route::get('/dataSatuan','Master\satuanController@getDataSatuan');
                Route::post('/simpanSatuan','Master\satuanController@insert');
            });

            Route::group(['prefix' => 'product'], function(){
                Route::get('/', 'Master\productController@index')->name('adminProduct');
                Route::post('/simpanProduct', 'Master\productController@insert');
                Route::post('/editProduct','Master\productController@update');
                Route::delete('/deleteProduct','Master\productController@delete');
            });
    });

});


Auth::routes();
