<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title_Card extends Model
{
  //SQLのテーブル名を指定
  protected $table = 'title__cards';

  //DBに保存する値はFillableに指定
  protected $fillable = ['maked_word','word_right_id','word_left_id',];
}
