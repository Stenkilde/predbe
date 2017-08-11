<?php

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
    return view('welcome');
});

Route::get('/teams', 'TeamsController@index');
Route::get('/team/{id}', 'TeamsController@single');

Route::get('/games', 'GamesController@index');
Route::get('/game/{id}', 'GamesController@single');

Route::get('/tournaments', 'TournamentsController@index');
Route::get('/tournament/{id}', 'TournamentsController@single');

Route::get('/serie/players', 'SeriePlayersController@index');
Route::get('/serie/player/{id}', 'SeriePlayersController@single');

Route::get('/series', 'SeriesController@index');
Route::get('/serie/{id}', 'SeriesController@single');

Route::get('/group/members', 'GroupMembersController@index');
Route::get('/group/members/{id}', 'GroupMembersController@single');

Route::get('/groups', 'GroupsController@index');
Route::get('/group/{id}', 'GroupsController@single');