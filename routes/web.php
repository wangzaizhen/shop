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

Route::get('/', function () {
    return view('welcome');
});
 // Route::get('/admin','AdminController@add');

Route::prefix('/admin')->middleware('stu')->group(function(){
	Route::get('add','AdminController@add');
	Route::post('doadd','AdminController@doadd');
	Route::get('index','AdminController@index');
	Route::get('del/{id}','AdminController@del');
	Route::get('edit/{id}','AdminController@edit');
	Route::get('update','AdminController@update');
	


});
Route::prefix('/login')->group(function(){
	Route::get('creat','LoginController@creat');
	Route::get('creatdo','LoginController@creatdo');
	Route::get('log','LoginController@log');
	Route::post('logdo','LoginController@logdo');
});
