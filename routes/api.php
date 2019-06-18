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
Route::middleware('auth:api')->get('/account/{user}', 'AccountController@getAccountInfoFromUser')->middleware('cors');
Route::middleware('auth:api')->get('/match/{user}', 'MatchingController@maakMatch')->middleware('cors');
Route::middleware('auth:api')->get('/interests/{user}', 'InterestController@getInterests')->middleware('cors');
Route::middleware('auth:api')->get('/interests', 'InterestController@getAllInterests')->middleware('cors');
Route::middleware('auth:api')->get('/pictures', 'ProfilePictureContoller@getProfilePictures')->middleware('cors');
Route::middleware('auth:api')->get('/userinfo/{user}', 'UserInfoController@getUserInfo')->middleware('cors');
Route::middleware('auth:api')->get('/friends/{user}', 'FriendController@getFriends')->middleware('cors');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
