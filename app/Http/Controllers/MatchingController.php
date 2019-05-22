<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Users;
use App\UserInterests;

class MatchingController extends Controller
{
  public function maakMatch($currentUser){

    // Deze controller kijkt wat voor matches de meegegeven user heeft
    // Op basis van de interesses van de user en de andere users

    $interesses = UserInterests::where(['user' => $currentUser])->pluck('interest');  //INteresse van currect User
    $matches = [];
    $users = Users::pluck('username'); // Alle andere users
    $match = false;

    // Per user kijken of ze een matching interesse hebben
    foreach($users as $user){
      $userArr = [];
      // De ingelogde user wordt niet meegenomen voor de matches
      if(strtolower($user) != $currentUser){
        $userInteresses = UserInterests::where(['user' => $user])->pluck('interest'); // Interesse 1 van de user opvragen

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
        $matches[$user] = $userArr;
        $match = false;
      }
    }

    // Matches terugsturen
    return $matches;
  }
}
