<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopsController extends Controller
{
   public function top(){
    return view('tops.top');
   }
}
