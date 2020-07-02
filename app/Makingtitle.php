<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makingtitle extends Model
{
  //SQLのテーブル名を指定
  protected $table = 'words';

  //リレーション
  public function titlecard()
  {
    $this->hasOne('App\Title_Card');
  }

}
