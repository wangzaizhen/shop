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
 Route::get('/admin','AdminController@index');

// Route::prefix('/admin')->group(function(){
// 	Route::get('add','AdminController@index');
// 	Route::post('add_do','AdminController@add_do');
// 	Route::get('list','AdminController@index');


// });