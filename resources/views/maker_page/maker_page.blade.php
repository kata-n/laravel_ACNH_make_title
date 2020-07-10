@extends('layouts.contents-template')

@section('title','肩書き作成ページ')

@section('description','あつ森で設定できる肩書きを作成できるページ')

@section('content')
  <div class="l-container p-container">
    <div id="app">
      <div id="nav">
        <router-link to="/">つくる</router-link>
        <router-link to="/title_cards_list">肩書きリスト</router-link>
      </div>
      <router-view/>
      <titleshow-component></titleshow-component>
    </div>
  </div>
@endsection


@section('footer')
      <div id="nav">
        <router-link to="/">つくる</router-link>
        <router-link to="/title_cards_list">肩書きリスト</router-link>
      </div>
      <router-view/>
@endsection