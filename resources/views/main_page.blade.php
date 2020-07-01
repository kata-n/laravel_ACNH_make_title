@extends('layouts.app')

@section('content')
    <div>
      @foreach($titleCards as $titleCard)
          <li>{{ $titleCard->maked_word }}</li>
          <li>{{ $titleCard->word_right_id }}</li>
          <li>{{ $titleCard->word_left_id }}</li>
          <hr/>
      @endforeach
    </div>
@endsection