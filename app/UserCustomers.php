<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCustomers extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User');
  }
  public function user_sales()
  {
    return $this->hasMany('App\UserSales')
  }
}
