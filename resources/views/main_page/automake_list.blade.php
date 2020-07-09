@extends('layouts.contents-template')

@section('title','自動生成肩書き一覧表示')

@section('description','自動生成した肩書きを一覧で表示するページ')

@section('content')
   <div class="l-container p-container">
    <div id="app">
      <autotitlelist-component></autotitlelist-component>
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