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
Route::get('/api/teams', 'TeamsController@index');
Route::get('/api/team/{id}', 'TeamsController@single');

Route::get('/api/games', 'GamesController@index');
Route::get('/api/game/{id}', 'GamesController@single');

Route::get('/api/tournaments', 'TournamentsController@index');
Route::get('/api/tournament/{id}', 'TournamentsController@single');

Route::get('/api/serie/players', 'SeriePlayersController@index');
Route::get('/api/serie/player/{id}', 'SeriePlayersController@single');

Route::get('/api/series', 'SeriesController@index');
Route::get('/api/serie/{id}', 'SeriesController@single');

Route::get('/api/group/members', 'GroupMembersController@index');
Route::post('/api/group/join', 'GroupMembersController@join');
Route::get('/api/group/members/{id}', 'GroupMembersController@single');

Route::get('/api/groups', 'GroupsController@index');
Route::post('/api/group', 'GroupsController@create');
Route::get('/api/group/{id}', 'GroupsController@single');

// User Routes
Route::post('/api/user', 'UserController@create');
Route::post('/api/auth', 'AuthController@authenticate');
Route::post('/api/me', 'AuthController@me');
Route::get('/api/me/groups', 'UserController@group');