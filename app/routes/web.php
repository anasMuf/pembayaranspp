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

Route::group(['prefix' => 'admin'], function(){
	// Route admin home
	Route::get('/', 'AdminController@index')->name('admin.home')->middleware('checkLogin');
	Route::get('/home', 'AdminController@index')->name('admin.home')->middleware('checkLogin');
	Route::get('/login', 'UserController@login')->name('admin.login');
	Route::get('/logout', 'UserController@logout')->name('admin.logout');
	Route::post('/loginPost', 'UserController@loginPost')->name('admin.loginPost');
});
