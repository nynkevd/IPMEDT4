<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accounts;

class AccountController extends Controller
{
    //
    public function getAccountInfoFromUser($currentUser){
      $username = Accounts::where(['username' => $currentUser])->get('username');
      $name = Accounts::where(['username' => $currentUser])->get('name');
      $firstLogin = Accounts::where(['username' => $currentUser])->get('first_login');
      $userInfo = "/api/userinfo/".$currentUser;

      $username = $username{0};
      $username = $username{'username'};

      $name = $name{0};
      $name = $name{'name'};

      $firstLogin = $firstLogin{0};
      $firstLogin = $firstLogin{'first_login'};


      $accountInfo = [
        "username" => $username,
        "name" => $name,
        "firstLogin" => $firstLogin,
        "userInfo" => $userInfo,
      ];

      return $accountInfo;
    }
}
