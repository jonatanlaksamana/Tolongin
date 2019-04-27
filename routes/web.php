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
Route::get('/admin/table','AdminController@tables')->name('admin.table');
Route::get('/userprofile/{id}','UserController@profile')->name('profile');
Route::post('/update','UserController@update')->name('update');
Route::post('/updateFoto','UserController@updateFoto')->name('updateFoto');
Route::get('/testimoni' , 'UserController@testimoni')->name('testimoni');
Route::get('/cart','indexcontroller@kategori')->name('kategori');
Route::post('/updatetestimoni' , 'UserController@updatetestimoni')->name('update.testi');
Route::get('/admin/testimoni' , 'AdminController@testimoni')->name('admin.testimoni');
Route::get('/jasa','UserController@jasa')->name('jasa');
Route::post('/delete/order/{id}' , 'AdminController@delete')->name('delete.order');
Route::get('/admin/users','AdminController@users')->name('admin.users');
