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
    $TitleCards = Title_Card::find($id);

    $Right_info = Makingtitle::find($TitleCards['word_right_id'],['word_sentence', 'word_right','get_method']);

    $Left_info = Makingtitle::find($TitleCards['word_left_id'],['word_sentence', 'word_left','get_method']);

    //JSONでVueに渡す
    return ['TitleCardsData' => $TitleCards,
            'Right_infoData' => $Right_info,
            'Left_infoData' => $Left_info,
           ];

  }

  //自動生成した肩書きを一覧で表示する
  public function words_list()
  {
    //最新30件、自動生成した情報を取得する
    $Titlelists = Title_Card::orderBy('created_at', 'DESC')
    ->take(30)->get();

    //JSONでVueに渡す
    return ['TitleListData' => $Titlelists];
//    return view('main_page/automake_list',compact('titlelists'));
  }

  //自動生成した個別ページ
  public function id_title($id)
  {
    //VueにID番号を渡す
    return view('main_page/id_title_page',compact('id'));
  }
}
