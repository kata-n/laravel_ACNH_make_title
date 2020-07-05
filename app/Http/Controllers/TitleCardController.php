<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title_Card;
use App\Makingtitle;

class TitleCardController extends Controller
{

  public function words_index($id)
  {

    //対応するIDの情報を取得する
    $titleCards = Title_Card::find($id);

    $right_info = Makingtitle::find($titleCards['word_right_id'],['word_sentence', 'word_right','get_method']);

    $left_info = Makingtitle::find($titleCards['word_left_id'],['word_sentence', 'word_left','get_method']);

    return view('main_page/main_page', compact('titleCards','right_info','left_info'));

    //    return response()->json(['results' => $titleCards,$right_info,$left_info]);

  }
}
