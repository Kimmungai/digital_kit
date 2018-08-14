<?php

namespace App\Http\Controllers;
use App\Website;
use App\Card;
use App\User;
use App\payment_details;
use App\publishing_details;
use Intervention\Image\Facades\Image;
use Auth;
use Illuminate\Http\Request;
use App\Mail\Published;
use Illuminate\Support\Facades\Mail;

class helpers extends Controller
{
    //function to record payment
    public function record_payment(){
      if(isset($_POST['paymentID'])){$paymentID=$_POST['paymentID'];}else{$paymentID='';}
      if(isset($_POST['paymentAmt'])){$paymentAmt=$_POST['paymentAmt'];}else{$paymentAmt='';}
      if(isset($_POST['paymentProvider'])){$paymentProvider=$_POST['paymentProvider'];}else{$paymentProvider='';}
      if(isset($_POST['paymentAmt']) && isset($_POST['prev_acc_bal'])){$acc_bal=$_POST['paymentAmt']+$_POST['prev_acc_bal'];}else{$acc_bal=0;}
      $new_payment=new payment_details;
      $new_payment->user_id=Auth::id();
      $new_payment->payment_id=$paymentID;
      $new_payment->Payment_amount=$paymentAmt;
      $new_payment->acc_bal=$acc_bal;
      $new_payment->payment_provider=$paymentProvider;
      $new_payment->save();
    }
    //function to pluck a value from db
    public function pluck_payment_details_value()
    {
      if(isset($_GET['paymentID'])){$paymentID=$_GET['paymentID'];}else{return;}
      $value =payment_details::where('payment_id','=',$paymentID)->value('acc_bal');
      return $value;
    }
    public function publish()
    {
     $user = User::with(['publishing_details','payment_details'=>function($query){
        $query->orderBy('id','Desc');
      }])->where('id','=',Auth::id())->first();
      //Mail::to($user->email)->send(new Published($user));
      $pub_cost=Auth::user()->publishing_details->publishing_cost;
      $acc_bal=payment_details::where('user_id','=',Auth::id())->orderBy('id','Desc')->value('acc_bal');
      $bal=round($acc_bal-$pub_cost,2);
      payment_details::where('user_id','=',Auth::id())->orderBy('id','Desc')->limit(1)->update([
        'acc_bal' => $bal,
      ]);
      return;
    }
}
