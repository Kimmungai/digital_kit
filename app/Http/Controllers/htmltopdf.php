<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class htmltopdf extends Controller
{
    private function card($user_id)
    {
      $pdf = App::make('dompdf.wrapper');
      $pdf->loadHTML('
      <h1>Your HTML Here</h1>
      ');
      return $pdf->stream();
    }
}
