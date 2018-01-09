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

Route::any('/','Index\IndexController@index');
Route::any('test','Index\IndexController@test');
Route::any('system','Index\IndexController@system');

Route::any('secret', function () {
	return view('secret');
});

Route::any('/seat',function(){
	return view('seat');
});

Route::get('admin','Admin\AdminController@index');
Route::get('admin/table-basic','Admin\AdminController@tableBasic');
Route::get('admin/table-complete','Admin\AdminController@tableComplete');
Route::get('admin/chart-line','Admin\AdminController@chartLine');
Route::get('admin/chart-columnar','Admin\AdminController@chartColumnar');
Route::get('admin/chart-pie','Admin\AdminController@chartPie');
Route::get('admin/form-basic','Admin\AdminController@formBasic');
Route::get('admin/form-validate','Admin\AdminController@formValidate');
Route::get('admin/cinema','Admin\AdminController@cinema');