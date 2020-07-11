@extends('layouts.contents-template')

@section('title','肩書き作成ページ')

@section('description','あつ森で設定できる肩書きを作成できるページ')

@section('header')

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