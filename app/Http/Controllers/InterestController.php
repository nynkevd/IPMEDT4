<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInterests;
use App\Interests;

class InterestController extends Controller
{
    public function getInterests($currentUser){
      // Deze controller geeft op basis van de ingelogde user de interesses van de users

      $currentInterests = UserInterests::where(['user' => $currentUser])->pluck('interest');

      return $currentInterests;
    }

    public function getAllInterests(){
    	$interests = Interests::pluck('interest');

    	return $interests;
    }
}
