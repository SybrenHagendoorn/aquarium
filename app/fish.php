<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fish extends Model
{
  protected $table = 'fishes';

    public function categories() {
    return $this->belongsToMany('App/Category');
  }
}
