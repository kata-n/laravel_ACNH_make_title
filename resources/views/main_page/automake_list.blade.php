@extends('layouts.contents-template')

@section('title','自動生成肩書き一覧表示')

@section('description','自動生成した肩書きを一覧で表示するページ')

@section('head_twitter')
    <meta name="twitter:card" content="summary"/>
    <meta property="og:title" content="肩書き"/>
    <meta property="og:description" content="あつまれどうぶつの森で設定できる「肩書き」を作ったり入手方法を知ることができるよ"/>
    <meta property="og:image" content="{{ asset('images/twittericon.jpeg') }}"/>
@endsection

@section('content')
   <div class="l-container p-container">
    <div id="app">
      <div class="l-router p-router">
        <router-link to="/">つくる</router-link>
        <router-link to="/title_cards_list">肩書きリスト</router-link>
      </div>
      <router-view/>
    </div>
  </div>
@endsection


@section('footer')

@endsection