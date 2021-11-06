<?php

namespace App\Http\Controllers;

use App\Models\Course as ModelsCourse;
use Illuminate\Http\Request;
use App\Models\Topic;

class course extends Controller
{
    
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  
    public function __invoke(Request $request)
    {
        //
    }
      public function showhi(){ 
           $courses = ModelsCourse::all();
         return view('home' );
      }
}
