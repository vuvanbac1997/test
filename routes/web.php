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

Auth::routes();
Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function(){
    Route::get('/', 'AdminController@index')->name('admin');

    Route::group(['prefix' => 'article'], function (){
        Route::get('/', 'ArticleController@index');
        Route::get('create', 'ArticleController@create');
        Route::post('create', 'ArticleController@store');
        Route::get('delete/{id}', 'ArticleController@destroy');
        Route::get('edit/{id}', 'ArticleController@edit');
    });
    Route::resource('user', 'UserController');
});

Route::group(['prefix'=>'user', 'middleware'=>'user'], function(){

    Route::get('home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'article'], function (){
        Route::get('create', 'ArticleController@create');
        Route::post('create', 'ArticleController@store');
//        Route::get('delete/{id}', 'ArticleController@destroy');
//        Route::get('edit/{id}', 'ArticleController@edit');
    });

});



