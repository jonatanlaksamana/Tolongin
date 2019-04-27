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





Auth::routes(['verify' => true]);

Route::get('/' , 'indexcontroller@index')->name('home');
Route::get('/home' , 'HomeController@index')->name('index')->middleware('verified');
Route::get('/admin' , 'AdminController@index')->middleware('is_admin')->name('admin.panel');
Route::get('/chart','AdminController@chart')->name('admin.chart');
Route::get('/table','AdminController@tables')->name('admin.table');
Route::get('/form','AdminController@form')->name('admin.form');
Route::get('/map','AdminController@map')->name('admin.map');
Route::get('/userprofile/{id}','UserController@profile')->name('profile');
Route::post('/update','UserController@update')->name('update');
Route::post('/updateFoto','UserController@updateFoto')->name('updateFoto');
Route::get('/testimoni' , 'UserController@testimoni')->name('testimoni');
Route::get('/cart','indexcontroller@kategori')->name('kategori');
Route::post('/updatetestimoni' , 'UserController@updatetestimoni')->name('update.testi');
Route::get('/admin/testimoni' , 'AdminController@testimoni')->name('admin.testimoni');
Route::get('/jasa','UserController@jasa')->name('jasa');
Route::get('/vtweb', 'PagesController@vtweb');
Route::get('/vtdirect', 'PagesController@vtdirect');
Route::post('/vtdirect', 'PagesController@checkout_process');
Route::get('/vt_transaction', 'PagesController@transaction');
Route::post('/vt_transaction', 'PagesController@transaction_process');
Route::post('/vt_notif', 'PagesController@notification');
Route::get('/snap', 'SnapController@snap');
Route::get('/snaptoken', 'SnapController@token');
Route::post('/snapfinish', 'SnapController@finish');
Route::get('/checkout','UserController@checkout')->name('checkout');
Route::get('/about','UserController@aboutus')->name('about');
Route::get('/contact','UserController@contact')->name('contact');
Route::get('/product','UserController@product')->name('product');
Route::get('/productzoom','UserController@productzoom')->name('productzoom');
Route::get('/cart','UserController@cart')->name('cart');
Route::post('/addcart','cartcontroller@store')->name('add.cart');
Route::post('/addTransaksi','Usercontroller@addTransaksi2')->name('addTransaksi');