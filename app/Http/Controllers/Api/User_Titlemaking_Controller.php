<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Makingtitle;

class User_Titlemaking_Controller extends Controller
{
    public function usermaiking()
    {
      //情報を取得する
      $title_info = Makingtitle::select(['word_left','word_right', 'word_sentence', 'get_method', 'get_sentence'])->get();

      return $title_info;

//      return response()->json(['results' => $title_info]);

    }
}
