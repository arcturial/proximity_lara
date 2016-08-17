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

// Beacon Routes
Route::get('/', 'HomeController@index');
Route::get('/beacons/add', 'HomeController@add');
Route::get('/beacons/edit', 'HomeController@edit');

// Card Routes
Route::get('/cards/', 'CardController@index');
Route::get('/cards/add', 'CardController@add');

// Deck Routes
Route::get('/decks/', 'DeckController@index');
Route::get('/decks/add', 'DeckController@add');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');