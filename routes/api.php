<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/match/{user}', 'MatchingController@maakMatch');
Route::middleware('auth:api')->get('/interests/{user}', 'InterestsController@getInterests');
Route::middleware('auth:api')->get('/pictures', 'ProfilePicturesContoller@getProfilePictures');
Route::middleware('auth:api')->get('/userinfo/{user}', 'UserInfoController@getUserInfo');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
