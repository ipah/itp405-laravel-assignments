<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;

class LoginController extends Controller
{
    //
    public function index(){
    	return view('login');
    }


    public function redirectToTwitter(){
        return Socialite::driver('twitter')->redirect();

    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(){
        $fbUser = Socialite::driver('facebook')->user();
        //dd($fbUser);
        $user = User::where('email','=',$fbUser->getEmail())->first();
        
        if(!$user){
            $user = new User();
            $user->name = $fbUser->getName();
            $user->email = $fbUser->getEmail();
        }

        $user->facebook_token = $fbUser->token;
        $user->facebook_token_secret = $fbUser->tokenSecret;
        $user->save();
        Auth::login($user);
        return redirect('/profile');
    }

    public function handleTwitterCallback(){
        $twitterUser = Socialite::driver('twitter')->user();

        $user = User::where('email','=',$twitterUser->getEmail())->first();
        if(!$user){
            $user = new User();
            $user->name = $twitterUser->getName();
            $user->email = $twitterUser->getEmail();

        }
        $user->twitter_token = $twitterUser->token;
        $user->twitter_token_secret = $twitterUser->tokenSecret;
        $user->save();
        Auth::login($user);
        return redirect('/profile');
    }

    public function login(){
    	$successful_login = Auth::attempt([
    		'email' => request('email'),
    		'password' => request('password')
    	]); //returns bool

    	if($successful_login){
    		return redirect('/profile');
    	}
    	else{
    		return redirect('/login');
    	}

    }

    public function logout(){
    	Auth::logout(); //destroys user in session
    	return redirect('/login');
    }
}
