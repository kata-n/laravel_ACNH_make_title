<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

class Retweet_listController extends Controller
{
    public function retweet()
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
          "q" => "あつ森 min_faves:100 filter:twing",
          "lang" => "ja",
          "locale" => "ja",
          "count" => "20",
          "result_type" => "recent",
          "include_entities" => "false",
      );

      //API実行
      $tweetlists = $twitter->get('search/tweets', $params);

      return response()->json(['results' => $tweetlists]);

    }
}
