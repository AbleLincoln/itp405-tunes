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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoices', 'InvoicesController@index');
Route::get('/invoices/{id}', 'InvoicesController@show');

// Genres
Route::get('/genres', 'GenresController@index');

// Tracks
Route::get('/tracks', 'TracksController@index');

// Playlists
Route::get('playlists', 'PlaylistsController@index');
Route::get('playlists/new', 'PlaylistsController@create');
Route::get('/playlists/{id}', 'PlaylistsController@show');

Route::post('/playlists', 'PlaylistsController@store');

// testing query strings
Route::get('/query', function(Request $request) {
    dd($request->input('genre'));
});
