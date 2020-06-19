<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('login', 'Api\PassportController@login');
Route::post('register', 'Api\PassportController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('get-details', 'Api\PassportController@getDetails');
});

Route::get('/posts','Api\PostController@index');
Route::get('/user','Api\UserController@index');
