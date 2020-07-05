@extends('layouts.contents-template')

@section('title','肩書き表示ページ')

@section('description','Twitterで作成した肩書きの入手方法などを表示しています')

@section('content')
  <div class="content">
    <div id="app">
      <titleautocard-component idnum="{{ $id }}">
      </titleautocard-component>
    </div>
  </div>
@endsection