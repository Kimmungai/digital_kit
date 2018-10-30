<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function publishing_details()
    {
      return $this->hasOne('App\publishing_details');
    }
    public function payment_details()
    {
      return $this->hasMany('App\payment_details');
    }
    public function blog()
    {
      return $this->hasMany('App\Blog');
    }
    public function card()
    {
      return $this->hasOne('App\Card');
    }
    public function website()
    {
      return $this->hasOne('App\Website');
    }
}
