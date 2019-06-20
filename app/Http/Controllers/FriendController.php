<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendController extends Controller
{
    //
    public function getFriends($currentUser){

      $userFriends = Friend::where(['username' => $currentUser])->pluck('friend');

      return $userFriends;

    }
}
