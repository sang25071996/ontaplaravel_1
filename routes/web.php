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


Route::get('/',function(){
  echo "hello world";
});
Route::namespace('Admin')->group(function(){
    Route::get('danh-sach','UserController@index')->name('list');
    Route::get('them','UserController@add')->name('add');
    Route::post('them','UserController@insert')->name('add');
    Route::get('xoa/{id}','UserController@delete')->name('delete');
    Route::get('sua/{id}','UserController@edit')->name('edit');
    Route::post('sua/{id}','UserController@update')->name('edit');
});
Route::get('ajax',function(){
  return view('ajax.index');
});
Route::get('get','Ajax\AjaxController@getajax');
/* eloquent */
Route::namespace('Frontend')->prefix('model')->group(function(){
	Route::get('them','HomeController@insert')->name('fronted_list');
	Route::get('sua/{id}','HomeController@update')->name('update');
	Route::get('danh-sach','HomeController@manage')->name('list');
});
