<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSales extends Model
{
  public function user_customers()
  {
      return $this->belongsTo('App\UserCustomers');
  }
}
