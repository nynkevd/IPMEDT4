<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;
use App\UserInterests;

class MatchingController extends Controller
{
  public function maakMatch($currentUser){

    // Deze controller kijkt wat voor matches de meegegeven user heeft
    // Op basis van de interesses van de user en de andere users

    $currentInterests = UserInterests::where(['user' => $currentUser])->pluck('interest');  //Interesses van currect User
    $matches = [];
    $users = Accounts::pluck('username'); // Alle andere users
    $match = false;

    // Per user kijken of ze een matching interesse hebben
    foreach($users as $user){
      $interestArr = []; // Overeenkomende interesses

      // De current user wordt niet meegenomen voor de matches
      if(strtolower($user) != strtolower($currentUser)){
        $userInterests = UserInterests::where(['user' => $user])->pluck('interest'); // Alle interesses van de user worden opgevraagd

        //Interesses van de twee users vergelijken
        foreach($userInterests as $userInterest){
          foreach($currentInterests as $currentInterest){
            if($currentInterest == $userInterest){
              // Maak een array met de matchende interesses bij deze 'andere' user
              array_push($interestArr, $currentInterest);
              $match = true;
            }
          }
        }
      }
      // Maak een array met alle users en de betreffende matches.
      if ($match) {
        $matches[$user] = $interestArr;
        $match = false;
      }
    }

    // Matches terugsturen
    return $matches;
  }
}
