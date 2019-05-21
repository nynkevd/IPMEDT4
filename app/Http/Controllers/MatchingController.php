<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MatchingController extends Controller
{
  public function maakMatch(){

    // Deze controller kijkt wat voor matches de ingelogde user heeft
    // Op basis van de interesses van de user en de andere users

    $currentUser = \Auth::user()->username;
    $interesses = DB::table('user_interests')->where(['user' => $currentUser])->pluck('interest');  //INteresse van currect User
    $matches = [];
    $users = DB::table('users')->pluck('username'); // Alle andere users
    $match = false;

    // Per user kijken of ze een matching interesse hebben
    foreach($users as $user){
      $userArr = [];
      // De ingelogde user wordt niet meegenomen voor de matches
      if($user != $currentUser){
        $userInteresses = DB::table('user_interests')->where(['user' => $user])->pluck('interest'); // Interesse 1 van de user opvragen

        //INteresses vergelijken 
        foreach($userInteresses as $userInteresse){
          foreach($interesses as $interesse){
            if($interesse == $userInteresse){
              // Maak een array met de matchende interesses bij deze 'andere' user
              array_push($userArr, $userInteresse);
              $match = true;
            }
          }
        }
      }
      // Maak een array met alle users en de betreffende matches. 
      if ($match) {
        array_push($matches, [$user => $userArr]);
        $match = false;
      }
    }

    // Matches terugsturen
    return $matches;
  }
}
