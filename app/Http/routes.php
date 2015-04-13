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

Route::get('/', 'WelcomeController@index');

Route::get('/signup', [
	'as' => 'auth.signup',
	'uses' => 'Auth\RegistrationController@showRegistrationForm',
	'middleware' => 'guest'
]);

Route::post('/signup', [
	'as' => 'auth.register',
	'uses' => 'Auth\RegistrationController@register',
	'middleware' => 'guest'
]);

Route::get('/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@showLoginForm',
	'middleware' => 'guest'
]);

Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/request', 'RequestController@show');
Route::post('/request', 'RequestController@create');
