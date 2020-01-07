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

use App\Http\Controllers\PostController;

Route::group(['middleware'=>'auth'],function(){
    Route::get('/',function(){return view('welcome');});

    Route::get('/posts','PostController@index')->name('posts.index');

    Route::get('posts/create','PostController@create')->name('posts.create');
    
    Route::post('posts/store','PostController@store')->name('posts.store');
    
    Route::get('posts/edit/{post}','PostController@edit')->name('posts.edit');
    Route::put('posts/update/{post}','PostController@update')->name('posts.update');
    
    Route::get('posts/{post}','PostController@show')->name('posts.show');
    
    Route::delete('posts/{post}','PostController@destroy');

});
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');
//google acoount
Route::get('login/google', 'Auth\LoginController@redirectToProvider2');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback2');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
