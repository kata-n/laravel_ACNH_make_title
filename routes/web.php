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
    return view('maker_page/maker_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//個別ページ
Route::get('/title_card/{id}', 'TitleCardController@words_index');

//称号を生成
Route::get('/get_title','TittleMakeController@making');

//Teitterログイン
Route::get('twitter/login', 'Auth\TwitterAuthController@redirectToProvider');
//Twitterコールバック
Route::get('twitter/callback', 'Auth\TwitterAuthController@handleProviderCallback');
