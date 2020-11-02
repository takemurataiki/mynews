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

Route::group(['prefix' => 'admin'], function() {//adminから始まるURLをまとめている
// Route::group　は、いくつかのRoutingの設定をgroup化する役割
//[‘prefix’ => ‘admin’]はのURLを http://XXXXXX.jp/admin/ から始まるURL にしている。
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    //http://XXXXXX.jp/admin/news/create にアクセスが来たら、Controller Admin\NewsController のAction addに渡す という設定をしている。
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth'); 
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); 
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
    
    //課題4
    Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
    Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
    Route::post('profile/create', 'Admin\ProfileController@create')->middleware('auth');
    
    
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
    Route::post('news/create', 'Admin\NewsController@create')->middleware('auth'); # 追記
});

Route::get('XXX', 'Admin\AAAController@bbb')->middleware('auth');//laravel09

    



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'NewsController@index');
Route::get('/profile', 'ProfileController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
