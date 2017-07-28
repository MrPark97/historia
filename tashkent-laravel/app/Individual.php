<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{

  public function images() {

    return $this->morphMany('App\Image', 'imageable');

  }

  public function image() {

    return $this->belongsTo('App\Image');

  }

  public function author() {

    return $this->belongsTo('App\User');

  }

}
