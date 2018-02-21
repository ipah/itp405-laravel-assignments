<?php
	

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use DB;
	use Validator;
	use App\Genre;


	class GenresController extends Controller{

		public function index(){
			// $genres = DB::table('genres')->get();
			$genres = Genre::all();
			return view('genre-list', [
				'genres' => $genres
			]);
		}
	}
?>