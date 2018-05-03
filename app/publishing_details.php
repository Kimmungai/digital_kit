<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publishing_details extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
