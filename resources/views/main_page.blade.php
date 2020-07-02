@extends('layouts.app')

@section('content')
    <div>
      <li>{{ $titleCards->maked_word }}</li>
      <li>{{ $titleCards->word_right_id }}</li>
      <li>{{ $titleCards->word_left_id }}</li>
    </div>
@endsection