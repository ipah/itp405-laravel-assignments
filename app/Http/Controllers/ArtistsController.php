<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Album;

class ArtistsController extends Controller
{
    //
    public function index(){
    	$artists = Artist::all();

    	return view('artist-list',[
    		'artists' => $artists
    	]);
    }

    public function showAlbums($artistId){
    	//dd($artistId);
    	$albums = Album::where('ArtistId', $artistId)->get();

    	return view('album-list',[
    		'albums' => $albums
    	]);
    }	
}
