<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Support\Facades\DB;
use App\Makingtitle;

class TittleMakeController extends Controller
{
  public function making()
  {
    //DBから情報を取得する
    $title_words = Makingtitle::select('word_left','word_right')->inRandomOrder()->first();

    //文字をつなげる
    $title_word = $title_words['word_left'].$title_words['word_right'];

    //Twitter情報取得
    $twitter = new TwitterOAuth(
        config('services.twitter.client_id'),
        config('services.twitter.client_secret'),
        config('services.twitter.access_token'),
        config('services.twitter.access_token_secret')
    );

//    $params = array(
//      "status" => $title_word,
//      "trim_user" => false,
//    );

        //検索クエリ指定
        $params = array(
            "q" => "あつ森",
            "lang" => "ja",
            "locale" => "ja",
            "count" => "30",
            "include_entities" => "false",
        );

        //API実行
        $results = $twitter->get('search/tweets', $params);
//
//    //API実行
//    $timeline = $twitter->post('statuses/update', $params);

    //JSONに渡す
    return response()->json(['results' => $results]);

  }
}
