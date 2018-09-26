<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aquarium extends Model
{
  protected $table = 'aquariums';

    public function aquarium() {
    return $this->belongToMany('App\Aquarium');
  }
}
