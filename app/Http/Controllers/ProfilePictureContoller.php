<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilePictures;

class ProfilePictureContoller extends Controller
{
    public function getProfilePictures(){
      $pictures = ProfilePictures::pluck('link');

      return $pictures;
    }
}
