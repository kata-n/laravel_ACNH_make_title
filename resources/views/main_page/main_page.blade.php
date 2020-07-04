@extends('layouts.contents-template')

@section('title','肩書き表示ページ')

@section('description','Twitterで作成した肩書きの入手方法などを表示しています')

@section('content')
    <div>
      <p>称号名</p>
      <li>{{ $titleCards->maked_word }}</li>

      <p>みぎの単語</p>
      <li>{{ $right_info->word_right }}</li>
      <p>元の称号</p>
      <li>{{ $right_info->word_sentence }}</li>
      <p>ゲット方法</p>
      <li>{{ $right_info->get_method }}</li>

      <p>ひだりの単語</p>
      <li>{{ $left_info->word_left }}</li>
      <p>元の称号</p>
      <li>{{ $left_info->word_sentence }}</li>
      <p>ゲット方法</p>
      <li>{{ $left_info->get_method }}</li>


    </div>
@endsection