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

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    //課題4
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    
    
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create'); # 追記
});

Route::get('XXX', 'Admin\AAAController@bbb')->middleware('auth');
Route::get('admin/profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::get('admin/profile/edit', 'Admin\ProfileController@add')->middleware('auth');
    



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

