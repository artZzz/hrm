<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'UserController@index');

Route::controllers([
	'reg' => 'Auth\AuthController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);





# REGISTRATION
Route::post('/reg', 'UserController@signUp');

#AUTH 
Route::post('/auth', 'UserController@signIn');

#USER-CHECK-AUTH
Route::group(array('middleware' => 'userAuth'), function()
{
    #NEWS-PAGE 
	Route::get('/news', 'UserController@getNews');

	#SETTINGS-PAGE 
	Route::get('/account', 'UserController@accountInfo');

});

#ADDNEWS
Route::post('/addnews', 'UserController@addNews');

#ADDCOMMENT
Route::post('/addcomment', 'UserController@addComment');

#LOGOUT
Route::post('/logout', 'UserController@logout');

#UPDATE-INFO
Route::post('/updateInfo', 'UserController@updateInfo');

#ACTIVATE-ACCOUNT
Route::get('/activate','UserController@activateEmail');
