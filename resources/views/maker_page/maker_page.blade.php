@extends('layouts.contents-template')

@section('title','肩書き作成ページ')

@section('description','あつ森で設定できる肩書きを作成できるページ')

@section('head_twitter')
    <meta name="twitter:card" content="summary"/>
    <meta property="og:title" content="あつ森 肩書きメーカー"/>
    <meta property="og:description" content="あつまれどうぶつの森で設定できる「肩書き」を作ったり入手方法を知ることができるよ"/>
    <meta property="og:image" content="{{ asset('images/top_view2.png') }}"/>
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