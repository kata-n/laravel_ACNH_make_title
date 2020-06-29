<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\User;
use App\TwitterUser;

class TwitterAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider()
    {
        return Socialite::with('twitter')->redirect();
    }

    public function handleProviderCallback()
    {
        $data = Socialite::with('twitter')->user();
        //Twitterデータがtwitter_usersテーブルに登録されているか確認
        $authUser = TwitterUser::where('twitter_user_id', $data->id)->first();

        if(!empty($authUser->user->id)){
          //すでにユーザー登録している場合
          Auth::login($authUser->user);
          return redirect('/mainpage')->with('flash_message', 'ログインしました');
        } else {
          //セッション情報をDBへ保存
          $twitter_account = session('twitter');

          $twitter_user = new TwitterUser([
            'twitter_user_id' => $twitter_account->id,
            'email' => $twitter_account->email,
            'name' => $twitter_account->name,
            'nickname' => $twitter_account->nickname,
            'avatar' => $twitter_account->avatar,
            'token' => $twitter_account->token,
            'token_secret' => $twitter_account->tokenSecret,
          ]);

          //DBへ登録
          $twitter_user->save();
          session()->forget('twitter');

          return redirect('/')->with('flash_message', '登録しました');
        }
    }
}