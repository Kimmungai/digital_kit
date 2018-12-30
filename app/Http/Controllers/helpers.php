<?php

namespace App\Http\Controllers;
use App\Website;
use App\Card;
use App\User;
use App\UserItems;
use App\Blog;
use App\payment_details;
use App\publishing_details;
use Intervention\Image\Facades\Image;
use Auth;
use Illuminate\Http\Request;
use App\Mail\published;
use App\Mail\help;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

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
      Mail::to($user->email)->send(new Published($user));
      Mail::to('kimpita9@gmail.com')->send(new Published($user));
      $pub_cost=Auth::user()->publishing_details->publishing_cost;
      $acc_bal=payment_details::where('user_id','=',Auth::id())->orderBy('id','Desc')->value('acc_bal');
      $bal=round($acc_bal-$pub_cost,2);
      payment_details::where('user_id','=',Auth::id())->orderBy('id','Desc')->limit(1)->update([
        'acc_bal' => $bal,
      ]);
      return;
    }
    public function help_form(Request $request)
    {
      Mail::to('kimpita9@gmail.com')->send(new Help($request));
      return;
    }
    public function blog($blog_id='')
    {
      $blog=Blog::where('id',$blog_id)->first();
      return view('blog',compact('blog'));
    }
    public function blog_form(Request $request)
    {
      $title=$request->input('blog_title');
      $content=$request->input('blog_content');
      $new_blog=new Blog;
      $new_blog->user_id=Auth::id();
      $new_blog->title=$title;
      $new_blog->content=$content;
      $new_blog->save();
      return $new_blog->content;
    }
    public function song_form(Request $request)
    {
      $item_full_url="";
      $item_image_url="";
      $item_preview_url="";
      $user_id=Auth::id();
      //$dir="/";
      if($request->hasFile('music-file'))
      {
        $file = $request->file('music-file');
        //$destinationPath = "songs/".$user_id."/full";
        //if (!Storage::exists($user_id)) {
            //Storage::makeDirectory($user_id);
            //Storage::makeDirectory($dir['path'].'/Sub Dir');
        //}
        $song_title=$request->input('song-title');
        $ext=$file->getClientOriginalExtension();
        $fname=$file->getClientOriginalName();
        //Storage::putAs('fname', fopen($file, 'r+',$song_title.'.'.$ext));
        //$item_full_url=$file->move($destinationPath,$song_title.'.'.$ext);
        //$item_full_url=Storage::putFileAs('photos', new File($destinationPath), $song_title.'.'.$ext);
        //$item_full_url = $request->file('music-file')->store('nyaus');
        Storage::put($song_title.': '.$user_id.'.'.$ext, fopen($file, 'r+'));
        $item_full_url =Storage::url($song_title.': '.$user_id.'.'.$ext);
      }
      if($request->hasFile('song-cover-image'))
      {
        $file = $request->file('song-cover-image');
        //$destinationPath = "songs/".$user_id."/full";
        /*if (!$destinationPath) {
            mkdir($destinationPath, 0777, true);
        }*/
        $ext=$file->getClientOriginalExtension();
        //$item_image_url=$file->move($destinationPath,'cover-image.'.$ext);
        //$item_image_url=Storage::putFileAs('photos', new File($destinationPath), 'cover-image.'.$ext);
        //$item_image_url = $request->file('song-cover-image')->store('nogos');
        Storage::put('Song-cover-image: '.$user_id.'.'.$ext, fopen($file, 'r+'));
        $item_image_url =Storage::url('Song-cover-image: '.$user_id.'.'.$ext);
      }
      $new_song = new UserItems;
      $new_song->user_id = $user_id;
      $new_song->item_name =$request->input('song-title');
      $new_song->item_full_url =url($item_full_url);
      $new_song->item_image_url =url($item_image_url);
      $new_song->item_preview_url =url($item_preview_url);
      $new_song->item_price =$request->input('song-price');
      $new_song->description =$request->input('song-description');
      $new_song->save();
      //return $request->input('song-title');*/
      //$mainDisk = Storage::disk('main_google');
      //$file = $request->file('music_file');
      //$fname=$file->getClientOriginalName();
      //return Storage::disk('local')->get($file);
      //return $file_contents=file_get_contents($file);
      //Storage::put($fname,$file_contents);
      //return Storage::putFile('photos', new File($request->music_file));
      //return $request->music_file->store('songs-full');
      //return "nyau";
      //$disk= Storage::disk('s3');
      //Storage::put($user_id.'/'.$fname, fopen($file, 'r+'),'public');
      //return Storage::url($fname);
      //$contents = collect(Storage::cloud()->listContents($dir, $recursive));
      //Storage::makeDirectory('/'.$user_id);
      return "nyau";


    }
}
