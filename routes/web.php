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
    return view('app');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/users/register','userController@getregisteruser')->name('getregister');
Route::post('/users/register','userController@registerUser')->name('postRegister');
