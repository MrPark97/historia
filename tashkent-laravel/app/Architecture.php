<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Architecture extends Model
{
  protected $dates = ['created_at', 'updated_at', 'creation_date','destruction_date'];

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
