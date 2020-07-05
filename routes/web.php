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

//ユーザー肩書き作成ページ
Route::get('/', function () {
    return view('maker_page/maker_page');
});

//肩書きを個別事に表示
Route::get('/title_cards/{id}', 'TitleCardController@id_title');
//個別肩書き情報を取得する
Route::get('title_cards/id/{id}', 'TitleCardController@words_index');

//肩書きを一覧で表示
Route::get('/title_card', 'TitleCardController@words_list');
Route::get('/title_cards_list', function () {
    return view('main_page/automake_list');
});

//肩書きを自動生成
Route::get('/get_title','TittleMakeController@making');

//Teitterログイン
Route::get('twitter/login', 'Auth\TwitterAuthController@redirectToProvider');
//Twitterコールバック
Route::get('twitter/callback', 'Auth\TwitterAuthController@handleProviderCallback');

Auth::routes();
