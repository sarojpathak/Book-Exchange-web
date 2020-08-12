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

//Route::middleware('auth:api/')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('')->middleware('cors')->group(function() {
    Route::post('login', 'Api\PassportController@login');
    Route::post('register', 'Api\PassportController@register');
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('get-details', 'Api\PassportController@getDetails');
    });

    Route::get('/posts', 'Api\PostController@index');
    Route::get('/user', 'Api\UserController@index');
    Route::get('/user/{id}', 'Api\UserController@UserDetail');
    Route::put('/user/{id}', 'Api\PassportController@updateUser');
    Route::get('/me', 'Api\UserController@getLoginUser');


// book add edit update delete

    Route::post('/book/add', 'Api\BookController@addBook');
    Route::get('/book', 'Api\BookController@getAllBook');
    Route::get('/book/detail/{book_id}', 'Api\BookController@getBookDetail');
    Route::get('/book/{email}', 'Api\BookController@getBookByUser');
    Route::put('/book/{id}', 'Api\BookController@updateBook');
    Route::delete('/book/{id}', 'Api\BookController@deleteBook');


//exchange add edit delete and get
    Route::post('/exchange/add', 'Api\ExchangeController@postExchange');
    Route::get('/exchange', 'Api\ExchangeController@getExchange');
    Route::put('/exchange/{id}', 'Api\ExchangeController@updateExchange');
    Route::put('/exchange/confirm/{id}', 'Api\ExchangeController@updateConfirmExchange');
    Route::delete('/exchange/{id}', 'Api\ExchangeController@deleteExchange');
    Route::get('/exchange/requestedto/{requested_id}', 'Api\ExchangeController@getExchnageStatus');
    Route::get('/exchange/requestedby/{requested_by}', 'Api\ExchangeController@getExchnageRequestedBy');
});
