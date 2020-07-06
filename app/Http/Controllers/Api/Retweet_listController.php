<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class Retweet_listController extends Controller
{
    public static function retweet()
    {
      //リツイートを行うツイートを検索する
      //Twitter情報取得
      $twitter = new TwitterOAuth(
          config('services.twitter.client_id'),
          config('services.twitter.client_secret'),
          config('services.twitter.access_token'),
          config('services.twitter.access_token_secret')
      );

      //検索クエリを指定
      $params = array(
          "q" => "あつ森 filter:images",
          "lang" => "ja",
          "locale" => "ja",
          "count" => "5",
          "result_type" => "popular",
          "include_entities" => "false",
      );

      //API実行
      $tweetlists = $twitter->get('search/tweets', $params);

      //無駄な情報を省く
      $tweetlists = current($tweetlists);

      //ユーザー側,登録済みTwitterIDだけを取り出す
      $retweetlist = array_column($tweetlists,'id_str');

      //ランダムで一つ選んでリツイートを行う
      //検索頻度を少なく設定している為、
      //同じものをリツイートする可能性は低い
      $key = array_rand( $retweetlist, 1 );
      $retweet_target = $retweetlist[$key];
      $result = $twitter->post('statuses/retweet/'.$retweet_target);

    }
}
