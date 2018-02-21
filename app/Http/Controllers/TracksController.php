<?php

namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use DB;
	use Validator;
	use App\Track;
	use App\Genre;


	class TracksController extends Controller{

		public function index(Request $request){
			
			// $tracks = DB::table('tracks')
				// ->select('tracks.Name as track','artists.Name as artist', 'albums.Title as album', 'tracks.UnitPrice' )
				// ->join('genres','tracks.GenreId', '=', 'genres.GenreId')
				// ->join('albums', 'albums.AlbumId', '=','tracks.AlbumId')
				// ->join('artists', 'artists.ArtistId',  '=', 'albums.ArtistId')
				// ->where('genres.Name', '=', $request->query('genre'))
				// ->get();

			$genre = Genre::where('name', $request->query('genre'))->first();
			if($genre == null){
				$tracks = Track::take(100)->get();
			}

			else{
				$tracks = Track::where('GenreId', $genre->GenreId)->get();
			}

			

			//dd($tracks[0]);



			return view('track-list', [
				'tracks' => $tracks
			]);
		}
	}


?>