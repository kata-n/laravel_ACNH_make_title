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

    //API実行
    $timeline = $twitter->post('statuses/update', array(
    "status" => $title_word)
    );

    //JSONに渡す
    return response()->json(['results' => $timeline]);

  }
}
