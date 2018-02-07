<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use DB;
	use Validator;


	class TracksController extends Controller{

		public function index(Request $request){
			
			$tracks = DB::table('tracks')
				->select('tracks.Name as track','artists.Name as artist', 'albums.Title as album', 'tracks.UnitPrice' )
				->join('genres','tracks.GenreId', '=', 'genres.GenreId')
				->join('albums', 'albums.AlbumId', '=','tracks.AlbumId')
				->join('artists', 'artists.ArtistId',  '=', 'albums.ArtistId')
				->where('genres.Name', '=', $request->query('genre'))
				->get();
			return view('track-list', [
				'tracks' => $tracks
			]);
		}
	}


?>