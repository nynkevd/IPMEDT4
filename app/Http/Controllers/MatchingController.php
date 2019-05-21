<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MatchingController extends Controller
{
  public function maakMatch(){
    $currentUser = \Auth::user()->username;
    $interesses = DB::table('user_interests')->where(['user' => $currentUser])->pluck('interest');
    $matches = [];
    $users = DB::table('users')->pluck('username');

    foreach($users as $user){
      $userArr = [];
      if($user != $currentUser){
        $userInteresses = DB::table('user_interests')->where(['user' => $user])->pluck('interest');

        foreach($userInteresses as $userInteresse){
          foreach($interesses as $interesse){
            if($interesse == $userInteresse){
              array_push($userArr, $userInteresse);
            }
          }

        }
      }
      array_push($matches, [$user => $userArr]);
    }

    return $matches;
  }
}
