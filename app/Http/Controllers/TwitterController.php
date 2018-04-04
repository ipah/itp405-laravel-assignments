<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterController extends Controller
{
    public function store(Request $request){
    	
    	//post tweet
    	$user = Auth::user();
    	$token = $user->twitter_token;
    	$token_secret = $user->twitter_token_secret;

    	$connection = new TwitterOAuth(
    		env('TWITTER_CLIENT_ID'),
    		env('TWITTER_CLIENT_SECRET'),
    		$token,
    		$token_secret
    	);

    	$connection->post('statuses/update', [
    		'status'=>$request->body
    	]);

    	return redirect('/profile', ['user'=>$user, 'provider'=>'twitter']);
    }
}
