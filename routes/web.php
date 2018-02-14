<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoices', 'InvoicesController@index');
Route::get('/invoices/{id}', 'InvoicesController@show');

Route::get('/playlists', 'PlaylistsController@index');
Route::get('/playlists/new', 'PlaylistsController@create');
Route::get('/playlists/{id}', 'PlaylistsController@show');
Route::get('/playlists/{id}/edit', 'PlaylistsController@edit');
Route::get('/playlists/{id}/delete', 'PlaylistsController@delete');
Route::post('/playlists', 'PlaylistsController@store');
Route::post('/playlists/{id}/edit', 'PlaylistsController@updatestore');

Route::get('/genres','GenresController@index');
Route::get('/tracks', 'TracksController@index');


Route::get('/phpinfo', function() {
  echo phpinfo();
});
