<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Support\Facades\DB;
use App\Makingtitle;
use App\Title_Card;

class TittleMakeController extends Controller
{
  public static function making()
  {
    //DBから情報を取得する
    $left_words = Makingtitle::select('id','word_left')->inRandomOrder()->first();
    $right_words = Makingtitle::select('id','word_right')->inRandomOrder()->first();

    //文字をつなげる
    $title_word = $left_words['word_left'].$right_words['word_right'];

    //生成した称号をDBへ保存する
    $maiking_title = new Title_Card([
      'maked_word' => $title_word,
      'word_right_id' => $right_words->id,
      'word_left_id' => $left_words->id,
    ]);
    $maiking_title->save();

    //インサートしたidを取得
    $maked_data = $maiking_title->id;

    //Twitter情報取得
    $twitter = new TwitterOAuth(
        config('services.twitter.client_id'),
        config('services.twitter.client_secret'),
        config('services.twitter.access_token'),
        config('services.twitter.access_token_secret')
    );

    //クエリ設定
//    $params = array(
//      "status" => $title_word."    詳しくみる：https://application-anch-tittlemaking.shikatana.com"."/title_cards/".$maked_data,
//      "trim_user" => false,
//    );

    $params = array(
      "status" => "今日の肩書き：".$title_word."              #どうぶつの森 #あつ森肩書きチャレンジ",
      "trim_user" => false,
    );

    //API実行
    $timeline = $twitter->post('statuses/update', $params);

  }
}
