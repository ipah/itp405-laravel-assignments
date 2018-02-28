<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Review;
use Validator;

class AlbumsController extends Controller
{
    //

    public function showReviews($albumId){
    	$reviews = Review::where('album_id', $albumId)->get();
    	$album = Album::where('AlbumId', $albumId)->first();
    	//dd($reviews);
    	return view('review-list',[
    		'reviews' => $reviews,
    		'album' => $album
    	]);
    }

    public function createReview($albumId){
    	$album = Album::where('AlbumId', $albumId)->first();
    	//dd($album);

    	return view('create-review',['album'=>$album]);
    }

    public function store(Request $request,$albumId){
    	//dd($albumId);

    	$validation = Validator::make(
    		//['title'=>$request->input('title')],
    		['body'=>$request->input('review')],
    		['body'=>'required|min:10']
    	);


    	if ($validation->passes()) {
            // DB::table('playlists')->insert([
            //     'Name' => $request->input('playlist')
            // ]);
            $review = new Review();
            $review->title = $request->input('title');
            $review->body = $request->input('review');
            $review->album_id = $albumId;
            $review->save();

            return redirect('/albums/'.$albumId.'/reviews');
        } else {
            return redirect('/albums/'.$albumId.'/reviews/new')
                ->withInput()
                ->withErrors($validation);
        }

    }
}
