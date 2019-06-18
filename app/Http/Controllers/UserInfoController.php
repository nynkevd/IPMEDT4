<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use App\ProfilePictures;
use App\Accounts;

class UserInfoController extends Controller
{
    public function getUserInfo($currentUser){
      $name = Accounts::where(['username' => $currentUser])->get('name');
      $ageArr = UserInfo::where(['username' => $currentUser])->get('age');
      $fromArr = UserInfo::where(['username' => $currentUser])->get('travel_from');
      $toArr = UserInfo::where(['username' => $currentUser])->get('travel_to');
      $picId = UserInfo::where(['username' => $currentUser])->get('profile_picture');
      $picId = $picId{0};
      $pic = $picId{'profile_picture'};

      $picLink = ProfilePictures::where(['id' => $pic])->get('link');
      $picLink = $picLink{0};
      $picLink = $picLink{'link'};

      $name = $name{0};
      $name = $name{'name'};
      $ageArr = $ageArr{0};
      $age = $ageArr{'age'};
      $fromArr = $fromArr{0};
      $from = $fromArr{'travel_from'};
      $toArr = $toArr{0};
      $to = $toArr{'travel_to'};
      $base_url = "/api/account/";

      $userInfo = [
        "name" => $name,
        "age" => $age,
        "from" => $from,
        "to" => $to,
        "picture" => $picLink,
        "account" => $base_url.$currentUser,
      ];

      return $userInfo;
    }


}
