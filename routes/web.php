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
Route::get('/AdminPanel','AdminController@adminpanel')->name('admin.panel');
Route::get('/form','AdminController@form')->name('admin.form');
Route::get('/map','AdminController@map')->name('admin.map');
Route::get('/userprofile/{id}','UserController@profile')->name('profile');
Route::post('/update','UserController@update')->name('update');
Route::post('/updateFoto','UserController@updateFoto')->name('updateFoto');
Route::get('/testimoni' , 'AdminController@testimoni')->name('testimoni');

