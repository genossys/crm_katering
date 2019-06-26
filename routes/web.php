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

Route::get('/', function () {
    return view('umum.welcome');
})->name('home');

//registrasi customer fix
Route::get('/register', 'Master\customerController@showRegistrasiForm');
Route::post('/postRegister','Master\customerController@register')->name('register');

//login user fix
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/postlogin', 'Auth\LoginController@postlogin');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');





Route::get('/product','Master\productController@index')->name('product');

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
                return view('admin.menuawal');
            })->name('admin');

            
            Route::group(['prefix' => 'user'], function(){
                Route::get('/','Master\userController@index')->name('pageuser');
                Route::get('/dataUser','Master\userController@getDataUser');
                Route::post('/simpanUser', 'Master\userController@addUser');
                Route::post('/editUser', 'Master\userController@editUser');
                Route::post('/editPassword', 'Master\userController@editPassword');
                Route::delete('/deleteUser', 'Master\userController@delete');
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
