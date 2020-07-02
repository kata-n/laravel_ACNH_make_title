<?php

namespace App\Http\Controllers;

use App\Title_Card;
use Illuminate\Http\Request;

class TitleCardController extends Controller
{

  public function words_index($id)
  {

    //対応するIDの情報を取得する
    $titleCards = Title_Card::find($id);

    return view('main_page', compact('titleCards'));

//    return response()->json(['results' => $titleCards]);

  }
}
