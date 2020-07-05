@extends('layouts.contents-template')

@section('title','自動生成肩書き一覧表示')

@section('description','自動生成した肩書きを一覧で表示するページ')

@section('content')
   <div class="content">
    <div id="app">
      <autotitlelist-component></autotitlelist-component>
    </div>
  </div>
@endsection