<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.layouts.master');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/users/register','userController@getregisteruser')->name('getregister');
Route::post('/users/register','userController@registerUser')->name('postRegister');

Route::get('users/login','userController@getLogin')->name('getlogin');
Route::post('users/login','userController@postLogin')->name('postlogin');
