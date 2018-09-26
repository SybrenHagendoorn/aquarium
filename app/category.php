<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\fish;

class category extends Model
{
  protected $table = 'categories';

    public function fish() {
    return $this->belongsToMany('App\fishModel', 'fish_categories' , 'fish_id' , 'category_id');
  }
}
