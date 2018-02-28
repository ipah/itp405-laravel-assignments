<?php

// Route::get('/', function () {
//     return redirect('/genres');
// });

// Route::get('/signup', 'SignupController@index'); //shows view for user to sign up
// Route::post('/signup', 'SignupController@signup');//processes user sign up
// Route::get('/login', 'LoginController@index');
// Route::post('/login', 'LoginController@login');

// Route::get('/logout', 'LoginController@logout');



// Route::get('/playlists', 'PlaylistsController@index');
// Route::get('/playlists/new', 'PlaylistsController@create');
// Route::get('/playlists/{id}', 'PlaylistsController@show');
// Route::get('/playlists/{id}/edit', 'PlaylistsController@edit');
// Route::get('/playlists/{id}/delete', 'PlaylistsController@delete');
// Route::post('/playlists', 'PlaylistsController@store');
// Route::post('/playlists/{id}/edit', 'PlaylistsController@updatestore');

// Route::get('/genres','GenresController@index');
// Route::get('/tracks', 'TracksController@index');

	Route::get('/artists', 'ArtistsController@index');
	Route::get('/artists/{id}/albums', 'ArtistsController@showAlbums');
	Route::get('/albums/{id}/reviews', 'AlbumsController@showReviews');

	Route::get('/albums/{id}/reviews/new', 'AlbumsController@createReview');
	Route::post('/albums/{id}/reviews', 'AlbumsController@store');

	 Route::middleware(['protected'])->group(function(){
		Route::get('/profile', 'AdminController@index');
		Route::get('/invoices', 'InvoicesController@index');
		Route::get('/invoices/{id}', 'InvoicesController@show');
		Route::get('/phpinfo', function() {
		  echo phpinfo();
		});

	});

	Route::middleware(['maintenance'])->group(function(){
		Route::get('/', function () {
		    return redirect('/genres');
		});

		Route::get('/signup', 'SignupController@index'); //shows view for user to sign up
		Route::post('/signup', 'SignupController@signup');//processes user sign up

		Route::get('/playlists', 'PlaylistsController@index');
		Route::get('/playlists/new', 'PlaylistsController@create');
		Route::get('/playlists/{id}', 'PlaylistsController@show');
		Route::get('/playlists/{id}/edit', 'PlaylistsController@edit');
		Route::get('/playlists/{id}/delete', 'PlaylistsController@delete');
		Route::post('/playlists', 'PlaylistsController@store');
		Route::post('/playlists/{id}/edit', 'PlaylistsController@updatestore');

		Route::get('/genres','GenresController@index');
		Route::get('/tracks', 'TracksController@index');

	});

	Route::get('/genres','GenresController@index');
		Route::get('/tracks', 'TracksController@index');




