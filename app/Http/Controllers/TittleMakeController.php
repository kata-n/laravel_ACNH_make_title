<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\words;

class TittleMakeController extends Controller
{
    $title_words = App\Make_title::select('word_right')->get()->inRandomOrder()->first();
}
