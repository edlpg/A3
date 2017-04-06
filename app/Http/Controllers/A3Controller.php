<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class A3Controller extends Controller
{
  public function calc(Request $req){

    $split   = $req -> input('manyWays',null);
    $howMuch = $req -> input('tab',null);
    $service = $req -> input('howWasService',null);
    $roundUp = $req -> input('round',null);

    $splitFeed = '';
    $howMuchFeed = '';
    $answer = '';

    if($split==null||$split=='')
    {
      $splitFeed = 'You must fill the text field...';
    }
    else{
      if(is_numeric($split))
      {
        if($split < 1)
        {
          $splitFeed = 'Must be 1 or greater...';
        }
      }
      else {
          $splitFeed = 'Value must be a NUMBER...';
         }
    }

    if($howMuch == null || $howMuch =='')
    {
      $howMuchFeed = 'You must fill the text field...';
    }
    else {
      if(is_numeric($howMuch))
      {
        if($howMuch < 0)
        {
          $howMuchFeed = 'Must be 0 or greater...';
        }
      }
      else {
        $howMuchFeed = 'Value must be a NUMBER..';
      }
    }

    if($splitFeed == '' && $howMuchFeed ==''){

      $answer = 'The amount per person is:';
        $calc = $howMuch/$split;
        if($service!='0'){
          $calc = $calc+($calc*($service/100));
        }
        if($roundUp == 'yes')
        {
          $calc = ceil($calc);
        }
        $answer .=$calc;
    }
    //if($roun !=null)
   return view('answer')->with(['splitFeed' => $splitFeed,'howMuchFeed' => $howMuchFeed,'answer' => $answer]);
  }
}
