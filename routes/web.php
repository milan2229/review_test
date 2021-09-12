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
Route::resource('user', 'UserController');


// Route::group(['prefix'=>'user'], function(){
//     Route::get('index', 'UserController@index')->name('user.index');
//     Route::get('create', 'UserController@create')->name('user.create');
//     Route::post('store', 'UserController@store')->name('user.store');
// });