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
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/users/register', 'HomeController@getregisteruser')->name('getregister');
Route::get('/users/login', 'HomeController@getloginuser')->name('getlogin');
Route::get('/users/addbook', 'HomeController@getAddBook')->name('addbook');
Route::get('/users/book-detail/{id}', 'HomeController@getBookDetailPage')->name('book-detail');
Route::get('/users/profile/{id}', 'HomeController@getProfile')->name('getProfile');
Route::get('/users/booklist/{id}', 'HomeController@getUsersBook')->name('getUsersBooks');
Route::get('/users/requests-to', 'HomeController@getRequestsTo')->name('getRequestsTo');
Route::get('/users/requests-by', 'HomeController@getRequestsBy')->name('getRequestsBy');
Route::get('/users/editbook/{id}', 'HomeController@getEditBook')->name('getEditBook');
Route::get('/users/editprofile/{id}', 'HomeController@getEditProfile')->name('editProfile');


//post route
Route::post('/users/register', 'userController@registerUser')->name('postRegister');
Route::post('/users/login', 'userController@postLogin')->name('postlogin');
Route::post('/users/logout', 'userController@logout')->name('logout');
Route::post('users/addbook', 'BookController@postBook')->name('addbook');
Route::post('/users/exchangebook', "BookController@postBookExchange")->name('bookexchange');
Route::post('/users/user-info', 'userController@getUserInfo')->name('getUserInfo');
Route::post('/users/request', 'HomeController@updateRequestStatus')->name('updateRequestStatus');
Route::post('/users/editbook', 'BookController@postEditBook')->name('postEditBook');
Route::post('/users/editprofile', 'userController@editUserInfo')->name('editUserInfo');
