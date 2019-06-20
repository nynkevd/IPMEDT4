<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Station;

class StationController extends Controller
{
    //
    public function getSTations(){
    	$stations = Station::pluck('station');

    	return $stations;
    }
}
