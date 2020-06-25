<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Makingtitle;

class TittleMakeController extends Controller
{
  public function making()
  {
    $title_words = Makingtitle::select('word_right')->get()->first();

    return response()->json(['results' => $title_words]);
  }
}
