<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticiparController extends Controller
{
    public function participar($id){
          Participar::find($id);
          return view('home');
   }


   public function getUltimoPartido(){

   }
}
