<?php

namespace App\Http\Controllers;

use App\Website;
use App\Card;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class main extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id=1)
    {
        $website= Website::where('id','=',$user_id)->first();
        $card = Card::where('id','=',$user_id)->first();
        return view('main',compact('website','card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function show($user_id=1)
    {
        $data = Website::where('id','=',$user_id)->first();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function edit(Website $website)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id=1)
    {//return $_POST['length'].$_POST['width'];
      if($request->hasFile($request['field']))
      {//return 'img/'.$user_id.'/'.$_POST['dir'].'/'.$_POST['fname'].'.jpg';
        $img=Image::make($request->file($_POST['fname']));
        $img->save('img/'.$user_id.'/'.$_POST['dir'].'/'.$_POST['fname'].'_original.jpg');
        $value='img/'.$user_id.'/'.$_POST['dir'].'/'.$_POST['fname'].'.jpg';
        if($_POST['length'] && $_POST['width'])
        {
          $img->crop($_POST['length'], $_POST['width'])->save($value);
        }
        $field = 'main_image';
        $model = 'Website';
      }
      else
      {
         $field = $request['field'];
         $model = $request['model'];
         $value = $request['value'];
      }
      if($model=='Website')
      {
        if(Website::where('id','=',$user_id)->update([
          $field => $value
        ])){
          return true;
        }
        else {
          return false;
        }
      }
      else if($model=='Card')
      {
        if(Card::where('id','=',$user_id)->update([
          $field => $value
        ])){
          return true;
        }
        else {
          return false;
        }
      }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Website  $website
     * @return \Illuminate\Http\Response
     */
    public function destroy(Website $website)
    {
        //
    }
}
