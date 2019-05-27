<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfilePictures;

class ProfilePicturesContoller extends Controller
{
    public function getProfilePictures(){
      $pictures = ProfilePictures::pluck('link');

      return $pictures;
    }
}
