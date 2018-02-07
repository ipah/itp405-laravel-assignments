<?php
	

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;
	use DB;
	use Validator;


	class GenresController extends Controller{

		public function index(){
			$genres = DB::table('genres')->get();
			return view('genre-list', [
				'genres' => $genres
			]);
		}
	}
?>