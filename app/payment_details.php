<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_details extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
