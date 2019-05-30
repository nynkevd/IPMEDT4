<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInfo;
use App\ProfilePictures;

class UserInfoController extends Controller
{
    public function getUserInfo($currentUser){
      $ageArr = UserInfo::where(['username' => $currentUser])->get('age');
      $fromArr = UserInfo::where(['username' => $currentUser])->get('from');
      $toArr = UserInfo::where(['username' => $currentUser])->get('to');
      $picId = UserInfo::where(['username' => $currentUser])->get('profile_picture');
      $picId = $picId{0};
      $pic = $picId{'profile_picture'};

      $picLink = ProfilePictures::where(['id' => $pic])->get('link');
      $picLink = $picLink{0};
      $picLink = $picLink{'link'};

      $ageArr = $ageArr{0};
      $age = $ageArr{'age'};
      $fromArr = $fromArr{0};
      $from = $fromArr{'from'};
      $toArr = $toArr{0};
      $to = $toArr{'to'};

      $userInfo = [
        "age" => $age,
        "from" => $from,
        "to" => $to,
        "picture" => $picLink
      ];

      return $userInfo;
    }


}