<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Architecture extends Model
{
    public function images() {

      return $this->morphMany('App\Image', 'imageable');

    }

    public function author() {

      return $this->belongsTo('App\User');

    }
}
