<?php

namespace App\Http\Controllers;

use App\Website;
use App\Card;
use Illuminate\Http\Request;

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
        return view('home',compact('website','card'));
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
    {
      if(isset($_FILES['main_image']))
      {
        $img=Image::make($_FILES['main_image']['tmp_name']);
        $img->save('img/bar.jpg');
        $field = 'main_image';
        $value='img/bar.jpg';
        $model = 'Website';
      }
      else
      {
        $field = $request['field']; $value = $request['value'];
        $model = $request['model'];
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
    public function save_image($user_id=1,$field='main_image')
    {
      $img = Image::make($_FILES['profile_image']['tmp_name']);
      $value='img/njega.jpg';
      $img->save($value);
      if(Website::where('id','=',$user_id)->update([
        $field => $value
      ])){
        return true;
      }
      else {
        return false;
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
