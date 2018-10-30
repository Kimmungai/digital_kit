<?php

namespace App\Http\Controllers;
use App\Website;
use App\Card;
use App\User;
use App\payment_details;
use App\publishing_details;
use Intervention\Image\Facades\Image;
use Auth;
use PDF;


use Illuminate\Http\Request;

class downloads extends Controller
{
  public function card()
  {
    $website= Website::where('id','=',Auth::id())->first();
    $card = Card::where('id','=',Auth::id())->first();
    $user = User::with('publishing_details','payment_details')->where('id','=',Auth::id())->first();
    $pdf = PDF::loadview('downloads.card',compact('website','card','user'));
    return $pdf->download('business card.pdf');
  }

}
