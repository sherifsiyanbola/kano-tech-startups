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

Auth::routes();

Route::get('/home', 'adminController@index')->name('admin');
Route::get('/', 'hubsController@index');
Route::get('kano/create', 'hubsController@create')->middleware('auth');;
Route::resource('kano', 'hubsController');
Route::resource('admin', 'adminController')->middleware('auth');;
Route::get('admin/create', 'adminController@create')->middleware('auth');
Route::post('admin/create', 'adminController@store')->middleware('auth');;


