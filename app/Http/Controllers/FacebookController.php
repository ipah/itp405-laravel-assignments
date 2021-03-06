<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
//use Abraham\TwitterOAuth\TwitterOAuth;
class FacebookController extends Controller
{
    public function store(Request $request){
    	//post tweet
    	$user = Auth::user();
    	$token = $user->facebook_token;
    	//$token_secret = $user->facebook_token_secret;

    	$connection = new FacebookOAuth(
    		env('FACEBOOK_CLIENT_ID'),
    		env('FACEBOOK_CLIENT_SECRET'),
    		$token
    	);

    	$connection->post('/me/feed', [
    		'status'=>$request->body
    	]);

    	return view('admin/profile', ['user'=>$user, 'provider'=>'facebook']);
    }
}
