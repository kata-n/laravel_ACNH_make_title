@extends('layouts.contents-template')

@section('title','自動生成肩書き一覧表示')

@section('description','自動生成した肩書きを一覧で表示するページ')

@section('content')
   <div class="content">
    <div id="app">

      <div id="nav">
        <router-link to="/">つくる</router-link>
        <router-link to="/title_cards_list">肩書きリスト</router-link>
      </div>
      <router-view/>

      <autotitlelist-component></autotitlelist-component>
    </div>
  </div>
@endsection