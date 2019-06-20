<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;
use App\UserInterests;
use App\UserInfo;
use DB;

class MatchingController extends Controller
{
  public function maakMatch($currentUser){

    // Deze controller kijkt wat voor matches de meegegeven user heeft
    // Op basis van de interesses van de user en de andere users

    $currentInterests = UserInterests::where(['user' => $currentUser])->pluck('interest');  //Interesses van currect User
    $matches = [];
    $users = Accounts::pluck('username'); // Alle andere users
    $match = false;

    $allUserInfo = UserInfo::all();
    $userInfo = UserInfo::where(['username' => $currentUser])->get();
    $travelTo = $userInfo[0]->travel_to;
    $travelFrom = $userInfo[0]->travel_from;

    // Per user kijken of ze een matching interesse hebben
    foreach($allUserInfo as $user){
      $interestArr = []; // Overeenkomende interesses

      // De current user wordt niet meegenomen voor de matches
      if(strtolower($user->username) != strtolower($currentUser)){
        $userInterests = UserInterests::where(['user' => $user->username])->pluck('interest'); // Alle interesses van de user worden opgevraagd

        // Controleer of de gebruikers hetzelfde reistraject hebben. Hierbij wordt geen onderscheid gemaakt tussen 'van' en 'naar'
        if((($user->travel_from == $travelFrom) || ($user->travel_from == $travelTo)) && (($user->travel_to == $travelFrom) || ($user->travel_to == $travelTo))){
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
      }

      // Maak een array met alle users en de betreffende matches.
      if ($match) {
        $matches[$user->username] = $interestArr;
        $match = false;
      }
    }

    // Matches terugsturen
    return $matches;
  }
}
