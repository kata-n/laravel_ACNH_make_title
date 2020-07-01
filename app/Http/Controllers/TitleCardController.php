<?php

namespace App\Http\Controllers;

use App\Title_Card;
use Illuminate\Http\Request;

class TitleCardController extends Controller
{

  public function words_index()
  {

    $titleCards = Title_Card::Select('maked_word','word_right_id','word_left_id')->get();

    return view('main_page', compact('titleCards'));
//    return response()->json(['results' => $titleCards]);

  }
}
