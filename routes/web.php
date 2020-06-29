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

//Route::get('/', function () {
//    return view('app');
//});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//get route
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);
Route::get('/users/register','HomeController@getregisteruser')->name('getregister');
Route::get('/users/login','HomeController@getloginuser')->name('getlogin');
Route::get('/users/addbook','HomeController@getAddBook')->name('addbook');

//post route
Route::post('/users/register','userController@registerUser')->name('postRegister');
Route::post('/users/login','userController@postLogin')->name('postlogin');
Route::post('/users/logout','userController@logout')->name('logout');
Route::post('users/addbook','BookController@postBook')->name('addbook');
    


