<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makingtitle;

class TittleMakeController extends Controller
{
  public function making()
  {
    $title_words = Makingtitle::select('word_left','word_right')->inRandomOrder()->first();

    //文字をつなげる
    $title_word = $title_words['word_left'].$title_words['word_right'];

    return response()->json(['results' => $title_word]);
  }
}
